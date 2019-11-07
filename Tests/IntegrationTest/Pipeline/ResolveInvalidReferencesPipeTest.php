<?php

declare(strict_types=1);

/**
 * This file is part of Narrowspark Framework.
 *
 * (c) Daniel Bannert <d.bannert@anolilab.de>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Viserio\Component\Container\Tests\IntegrationTest\Pipeline;

use PHPUnit\Framework\TestCase;
use stdClass;
use Viserio\Component\Container\Argument\ClosureArgument;
use Viserio\Component\Container\ContainerBuilder;
use Viserio\Component\Container\Definition\ObjectDefinition;
use Viserio\Component\Container\Definition\ReferenceDefinition;
use Viserio\Component\Container\Pipeline\ResolveInvalidReferencesPipe;
use Viserio\Contract\Container\Exception\NotFoundException;

/**
 * @internal
 *
 * @small
 */
final class ResolveInvalidReferencesPipeTest extends TestCase
{
    public function testProcess(): void
    {
        $container = new ContainerBuilder();

        /** @var ObjectDefinition $definition */
        $definition = $container
            ->bind('foo', new stdClass())
            ->setArguments([
                new ReferenceDefinition('bar', ReferenceDefinition::NULL_ON_INVALID_REFERENCE),
                new ReferenceDefinition('baz', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE),
            ])
            ->addMethodCall('foo', [new ReferenceDefinition('moo', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE)]);

        $this->process($container);

        $arguments = $definition->getArguments();

        self::assertSame([null, null], $arguments);
        self::assertCount(0, $definition->getMethodCalls());
    }

    public function testProcessIgnoreInvalidArgumentInCollectionArgument(): void
    {
        $container = new ContainerBuilder();
        $container->bind('baz');

        /** @var ObjectDefinition $definition */
        $definition = $container
            ->bind('foo', new stdClass())
            ->setArguments([
                [
                    new ReferenceDefinition('bar', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE),
                    $baz = new ReferenceDefinition('baz', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE),
                    new ReferenceDefinition('moo', ReferenceDefinition::NULL_ON_INVALID_REFERENCE),
                ],
            ]);

        $this->process($container);

        $arguments = $definition->getArguments();

        self::assertSame([$baz, null], $arguments[0]);
    }

    public function testProcessKeepMethodCallOnInvalidArgumentInCollectionArgument(): void
    {
        $container = new ContainerBuilder();
        $container->bind('baz');

        /** @var ObjectDefinition $definition */
        $definition = $container
            ->bind('foo', new stdClass())
            ->addMethodCall('foo', [
                [
                    new ReferenceDefinition('bar', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE),
                    $baz = new ReferenceDefinition('baz', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE),
                    new ReferenceDefinition('moo', ReferenceDefinition::NULL_ON_INVALID_REFERENCE),
                ],
            ]);

        $this->process($container);

        $calls = $definition->getMethodCalls();

        self::assertCount(1, $definition->getMethodCalls());
        self::assertSame([$baz, null], $calls[0][1][0]);
    }

    public function testProcessWithNonExistentServices(): void
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionMessage('The service [foo] has a dependency on a non-existent service [bar].');

        $container = new ContainerBuilder();

        /** @var ObjectDefinition $definition */
        $definition = $container
            ->bind('foo', new stdClass())
            ->setArguments([new ReferenceDefinition('bar')]);

        $this->process($container);

        $arguments = $definition->getArguments();

        self::assertEquals('bar', $arguments[0]->getName());
    }

    public function testProcessRemovesPropertiesOnInvalid(): void
    {
        $container = new ContainerBuilder();

        /** @var ObjectDefinition $definition */
        $definition = $container
            ->bind('foo', new stdClass())
            ->setProperty('foo', new ReferenceDefinition('bar', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE));

        $this->process($container);
        self::assertEquals([], $definition->getProperties());
    }

    public function testProcessRemovesArgumentsOnInvalid(): void
    {
        $container = new ContainerBuilder();

        /** @var ObjectDefinition $definition */
        $definition = $container
            ->bind('foo', new stdClass())
            ->addArgument([
                [
                    new ReferenceDefinition('bar', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE),
                    new ClosureArgument(new ReferenceDefinition('baz', ReferenceDefinition::IGNORE_ON_INVALID_REFERENCE)),
                ],
            ]);

        $this->process($container);
        self::assertSame([[[]]], $definition->getArguments());
    }

    protected function process(ContainerBuilder $container): void
    {
        $pass = new ResolveInvalidReferencesPipe();
        $pass->process($container);
    }
}
