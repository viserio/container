<?php

declare(strict_types=1);

namespace Viserio\Component\Container\Tests\IntegrationTest\Dumper\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class PhpDumperContainerTestDumpHandlesObjectClassNames extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->parameters = [
            'class' => \stdClass::class,
            'container.dumper.inline_class_loader' => true,
        ];
        $this->methodMapping = [
            'bar' => 'get91b123d3875702532e36683116824223d37b37377003156fc244abb2a82fec9c',
        ];
    }

    /**
     * Returns the public bar shared service.
     *
     * @return \stdClass
     */
    protected function get91b123d3875702532e36683116824223d37b37377003156fc244abb2a82fec9c(): \stdClass
    {
        return $this->services['bar'] = new \stdClass(new \stdClass());
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
            'foo' => true,
        ];
    }
}
