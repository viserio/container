<?php

declare(strict_types=1);

namespace Viserio\Component\Container\Tests\IntegrationTest\Dumper\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class PhpDumperContainerTestContainerCanBeDumpedWithConditionalDefinition extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMapping = [
            'baz' => 'get601ebbf111eade1dea92676086466647f1ade8dccb6090fb680c0566ce14bea4',
            'closure' => 'get79a31409d3ebbb30a5b616082b33e23c1919700cba4aafa93a8f4f5cc93588d1',
            'complex' => 'getd7e382cf622b905e1e471835b329dc0a14651afb634a064d7ea691189b7d29ec',
            'foo' => 'get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f',
        ];
    }

    /**
     * Returns the public baz shared service.
     *
     * @return \stdClass
     */
    protected function get601ebbf111eade1dea92676086466647f1ade8dccb6090fb680c0566ce14bea4(): \stdClass
    {
        $this->services['baz'] = $instance = new \stdClass();

        if ($this->has('foo')) {
            $instance->foo = ($this->services['foo'] ?? ($this->services['foo'] = new \stdClass()));
        }

        if ($this->has('bar')) {
            $instance->bar = ($this->services['bar'] ?? $this->get('bar'));
            $instance->foo();
        }

        return $instance;
    }

    /**
     * Returns the public closure shared service.
     *
     * @return mixed Returned by a function
     */
    protected function get79a31409d3ebbb30a5b616082b33e23c1919700cba4aafa93a8f4f5cc93588d1()
    {
        return $this->services['closure'] = static function () {
    return 'test';
};
    }

    /**
     * Returns the public complex shared service.
     *
     * @return \stdClass
     */
    protected function getd7e382cf622b905e1e471835b329dc0a14651afb634a064d7ea691189b7d29ec(): \stdClass
    {
        $this->services['complex'] = $instance = new \stdClass();

        if ($this->has('foo') && \class_exists(\stdClass::class) && $instance instanceof \stdClass) {
            $instance->foo = ($this->services['foo'] ?? ($this->services['foo'] = new \stdClass()));
        }

        return $instance;
    }

    /**
     * Returns the public foo shared service.
     *
     * @return \stdClass
     */
    protected function get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f(): \stdClass
    {
        $this->services['foo'] = $instance = new \stdClass();

        if (\class_exists(\stdClass::class)) {
            $instance->bar = 'bar';
        }

        return $instance;
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