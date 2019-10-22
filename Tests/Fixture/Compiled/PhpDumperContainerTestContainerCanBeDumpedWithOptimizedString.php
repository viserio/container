<?php

declare(strict_types=1);

namespace Viserio\Component\Container\Tests\IntegrationTest\Dumper\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class PhpDumperContainerTestContainerCanBeDumpedWithOptimizedString extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->parameters = [
            'empty_value' => '',
            'some_string' => '-',
        ];
        $this->methodMapping = [
            'test' => 'get95a0d6e03fdcf720f80f75aee4eb2c15a71cdf88df1fd6ea307a737f93b64a12',
        ];
    }

    /**
     * Returns the public test service.
     *
     * @return \stdClass
     */
    protected function get95a0d6e03fdcf720f80f75aee4eb2c15a71cdf88df1fd6ea307a737f93b64a12(): \stdClass
    {
        $instance = new \stdClass();

        $instance->foo = 'test';
        $instance->{'only dot'} = '.';
        $instance->{'concatenation as value'} = '.\'\'.';
        $instance->{'concatenation from the start value'} = '\'\'.';
        $instance->{'.'} = 'dot as a key';
        $instance->{'.\'\'.'} = 'concatenation as a key';
        $instance->{'\'\'.'} = 'concatenation from the start key';
        $instance->{'optimize concatenation'} = 'string1-string2';
        $instance->{'optimize concatenation with empty string'} = 'string1string2';
        $instance->{'optimize concatenation from the start'} = 'start';
        $instance->{'optimize concatenation at the end'} = 'end';
        $instance->{'new line'} = 'string with '."\n"
    .'new line';

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
