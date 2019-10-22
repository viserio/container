<?php

declare(strict_types=1);

namespace Viserio\Component\Container\Tests\IntegrationTest\Dumper\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class PhpDumperContainerTestContainerCanBeDumpedWithExtendArray extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMapping = [
            'be' => 'gete34e4d16116d12eadb070b397f80cedd86a0a1ebe0a947b84cd46b7cc55b5793',
            'foo' => 'get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f',
        ];
    }

    /**
     * Returns the public be service.
     *
     * @return array
     */
    protected function gete34e4d16116d12eadb070b397f80cedd86a0a1ebe0a947b84cd46b7cc55b5793(): array
    {
        return [
            'bar' => 'hey',
            'test' => 'yeah',
        ];
    }

    /**
     * Returns the public foo service.
     *
     * @return array
     */
    protected function get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f(): array
    {
        return [
            'bar' => 'hey',
            'foo' => 'bar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return [
            \Psr\Container\ContainerInterface::class => true,
            \Viserio\Contract\Container\Factory::class => true,
            \Viserio\Contract\Container\TaggedContainer::class => true,
            'container' => true,
        ];
    }
}