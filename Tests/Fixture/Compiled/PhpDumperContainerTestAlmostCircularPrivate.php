<?php

declare(strict_types=1);

namespace Viserio\Component\Container\Tests\Integration\Dumper\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class PhpDumperContainerTestAlmostCircularPrivate extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMapping = [
            'bar2' => 'getbb42faa8373ed25c909e5cb63c9611439de94dce36c9bb6dd548d71818f50fa9',
            'bar3' => 'get5ad625d0fc6832ddd368c93f0a20adcc459bcfb67179cd1783b720e4f5b37782',
            'baz6' => 'get99be4ce0ce1312e640bb778058698e66e525e80596ecccc2bb9cbec3bea0e054',
            'connection' => 'get99c4de5c2787a5000cc22e2c8c072c6bd9563ea3a9e35e0d2127c2fe9b18d7b2',
            'connection2' => 'get0b37d084e0922f6a7a9ab1a80b814af9b9b118cb2449560fd3c1d1350e410aa5',
            'foo' => 'get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f',
            'foo2' => 'get0670b9ceea787e883f11345117450966a7b98927ce9dff50dbd585bcf9d32d46',
            'foo5' => 'get704437cf7a16a0d55e5c079959ab6dc25148e640cca407cd4c820a63cf559d54',
            'foo6' => 'get8308126fb90ef115671ad06d6d1712afd548dc290d2805e6e24d1ea05d98081a',
            'foobar4' => 'geta04ef8e272e315248e82811274fb69a327c60979ae0c360be5144aa318da971f',
            'listener3' => 'getf8684f2dcc3d10793d85f8c9adc5a64aedfa15f0bd74d2839d9b7ce85113c7dc',
            'listener4' => 'get6f6dc2e14bc9a50c1ceb16b063c4068cf9e3ae84cf93fbfd83503edef7156fef',
            'logger' => 'get6bccd5dc1683fe9ec48a06d8bf599ba5c0517c7cf408fd083779c5dcbe7d3e76',
            'manager' => 'get5bac279646e2607172e8b67bfd678afe65d03ea3018aed331961ee571fc45806',
            'manager2' => 'get664501843c1fcb2c9ce8ed0d2393065ffed3acb8b22781e5bba499a9a63d37c7',
            'manager3' => 'get56666ca4e9280818b29123e643a7994417998065186ae650a4ccd013a84a5576',
            'root' => 'get3d31ba1074658750b148b9cc51d4de80228bfec23e178041c0b149bd48569a83',
            'subscriber' => 'get0eca54c9f4d159ea8c54976edd1ce37cc0a94ddc38e56466b3663e59637866c1',
        ];
    }

    /**
     * Returns the public bar2 shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular
     */
    protected function getbb42faa8373ed25c909e5cb63c9611439de94dce36c9bb6dd548d71818f50fa9(): \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular
    {
        $this->services['bar2'] = $instance = new \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular();

        $instance->addFoobar(new \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular(($this->services['foo2'] ?? $this->get0670b9ceea787e883f11345117450966a7b98927ce9dff50dbd585bcf9d32d46())));

        return $instance;
    }

    /**
     * Returns the public bar3 shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular
     */
    protected function get5ad625d0fc6832ddd368c93f0a20adcc459bcfb67179cd1783b720e4f5b37782(): \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular
    {
        $this->services['bar3'] = $instance = new \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular();

        $a = new \Viserio\Component\Container\Tests\Fixture\Circular\DummyFoobarCircular();

        $instance->addFoobar($a, $a);

        return $instance;
    }

    /**
     * Returns the public baz6 shared service.
     *
     * @return \stdClass
     */
    protected function get99be4ce0ce1312e640bb778058698e66e525e80596ecccc2bb9cbec3bea0e054(): \stdClass
    {
        $this->services['baz6'] = $instance = new \stdClass();

        $instance->bar6 = ($this->privates['bar6'] ?? $this->get0f8ce57bd09c7afa3debbb610300810a217d3e8ea67ea05f4b7e6668b895fb2d());

        return $instance;
    }

    /**
     * Returns the public connection shared service.
     *
     * @return \stdClass
     */
    protected function get99c4de5c2787a5000cc22e2c8c072c6bd9563ea3a9e35e0d2127c2fe9b18d7b2(): \stdClass
    {
        $a = new \stdClass();

        $b = new \stdClass();

        $this->services['connection'] = $instance = new \stdClass($a, $b);

        $b->logger = ($this->services['logger'] ?? $this->get6bccd5dc1683fe9ec48a06d8bf599ba5c0517c7cf408fd083779c5dcbe7d3e76());

        $a->subscriber = ($this->services['subscriber'] ?? $this->get0eca54c9f4d159ea8c54976edd1ce37cc0a94ddc38e56466b3663e59637866c1());

        return $instance;
    }

    /**
     * Returns the public connection2 shared service.
     *
     * @return \stdClass
     */
    protected function get0b37d084e0922f6a7a9ab1a80b814af9b9b118cb2449560fd3c1d1350e410aa5(): \stdClass
    {
        $a = new \stdClass();

        $b = new \stdClass();

        $this->services['connection2'] = $instance = new \stdClass($a, $b);

        $c = new \stdClass($instance);

        $d = ($this->services['manager2'] ?? $this->get664501843c1fcb2c9ce8ed0d2393065ffed3acb8b22781e5bba499a9a63d37c7());

        $c->handler2 = new \stdClass($d);

        $b->logger2 = $c;

        $a->subscriber2 = new \stdClass($d);

        return $instance;
    }

    /**
     * Returns the public foo shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
     */
    protected function get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f(): \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
    {
        $a = new \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular();

        $this->services['foo'] = $instance = new \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular($a);

        $a->addFoobar(new \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular($instance));

        return $instance;
    }

    /**
     * Returns the public foo2 shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
     */
    protected function get0670b9ceea787e883f11345117450966a7b98927ce9dff50dbd585bcf9d32d46(): \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
    {
        $a = ($this->services['bar2'] ?? $this->getbb42faa8373ed25c909e5cb63c9611439de94dce36c9bb6dd548d71818f50fa9());

        if (isset($this->services['foo2'])) {
            return $this->services['foo2'];
        }

        return $this->services['foo2'] = new \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular($a);
    }

    /**
     * Returns the public foo5 shared service.
     *
     * @return \stdClass
     */
    protected function get704437cf7a16a0d55e5c079959ab6dc25148e640cca407cd4c820a63cf559d54(): \stdClass
    {
        $this->services['foo5'] = $instance = new \stdClass();

        $a = new \stdClass($instance);
        $a->foo = $instance;

        $instance->bar = $a;

        return $instance;
    }

    /**
     * Returns the public foo6 shared service.
     *
     * @return \stdClass
     */
    protected function get8308126fb90ef115671ad06d6d1712afd548dc290d2805e6e24d1ea05d98081a(): \stdClass
    {
        $this->services['foo6'] = $instance = new \stdClass();

        $instance->bar6 = ($this->privates['bar6'] ?? $this->get0f8ce57bd09c7afa3debbb610300810a217d3e8ea67ea05f4b7e6668b895fb2d());

        return $instance;
    }

    /**
     * Returns the public foobar4 shared service.
     *
     * @return \stdClass
     */
    protected function geta04ef8e272e315248e82811274fb69a327c60979ae0c360be5144aa318da971f(): \stdClass
    {
        $a = new \stdClass();

        $this->services['foobar4'] = $instance = new \stdClass($a);

        $a->foobar = $instance;

        return $instance;
    }

    /**
     * Returns the public listener3 shared service.
     *
     * @return \stdClass
     */
    protected function getf8684f2dcc3d10793d85f8c9adc5a64aedfa15f0bd74d2839d9b7ce85113c7dc(): \stdClass
    {
        $this->services['listener3'] = $instance = new \stdClass();

        $instance->manager = ($this->services['manager3'] ?? $this->get56666ca4e9280818b29123e643a7994417998065186ae650a4ccd013a84a5576());

        return $instance;
    }

    /**
     * Returns the public listener4 shared service.
     *
     * @return \stdClass
     */
    protected function get6f6dc2e14bc9a50c1ceb16b063c4068cf9e3ae84cf93fbfd83503edef7156fef(): \stdClass
    {
        $a = $this->get6ea312c3728ef9dd8ce4fa67b23172eccc88f9ccaf14ab7ea16e7e6df2ce2342();

        if (isset($this->services['listener4'])) {
            return $this->services['listener4'];
        }

        return $this->services['listener4'] = new \stdClass($a);
    }

    /**
     * Returns the public logger shared service.
     *
     * @return \stdClass
     */
    protected function get6bccd5dc1683fe9ec48a06d8bf599ba5c0517c7cf408fd083779c5dcbe7d3e76(): \stdClass
    {
        $a = ($this->services['connection'] ?? $this->get99c4de5c2787a5000cc22e2c8c072c6bd9563ea3a9e35e0d2127c2fe9b18d7b2());

        if (isset($this->services['logger'])) {
            return $this->services['logger'];
        }

        $this->services['logger'] = $instance = new \stdClass($a);

        $instance->handler = new \stdClass(($this->services['manager'] ?? $this->get5bac279646e2607172e8b67bfd678afe65d03ea3018aed331961ee571fc45806()));

        return $instance;
    }

    /**
     * Returns the public manager shared service.
     *
     * @return \stdClass
     */
    protected function get5bac279646e2607172e8b67bfd678afe65d03ea3018aed331961ee571fc45806(): \stdClass
    {
        $a = ($this->services['connection'] ?? $this->get99c4de5c2787a5000cc22e2c8c072c6bd9563ea3a9e35e0d2127c2fe9b18d7b2());

        if (isset($this->services['manager'])) {
            return $this->services['manager'];
        }

        return $this->services['manager'] = new \stdClass($a);
    }

    /**
     * Returns the public manager2 shared service.
     *
     * @return \stdClass
     */
    protected function get664501843c1fcb2c9ce8ed0d2393065ffed3acb8b22781e5bba499a9a63d37c7(): \stdClass
    {
        $a = ($this->services['connection2'] ?? $this->get0b37d084e0922f6a7a9ab1a80b814af9b9b118cb2449560fd3c1d1350e410aa5());

        if (isset($this->services['manager2'])) {
            return $this->services['manager2'];
        }

        return $this->services['manager2'] = new \stdClass($a);
    }

    /**
     * Returns the public manager3 shared service.
     *
     * @return \stdClass
     */
    protected function get56666ca4e9280818b29123e643a7994417998065186ae650a4ccd013a84a5576(): \stdClass
    {
        return $this->services['manager3'] = $this->createProxy('stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641', function () {
            return stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                $a = ($this->services['listener3'] ?? $this->getf8684f2dcc3d10793d85f8c9adc5a64aedfa15f0bd74d2839d9b7ce85113c7dc());

                if (isset($this->services['manager3'])) {
                    return $this->services['manager3'];
                }
                $b = new \stdClass();
                $b->listener = [
                    0 => $a,
                ];

                $wrappedInstance = new \stdClass($b);
                $proxy->setProxyInitializer(null);

                return true;
            });
        });
    }

    /**
     * Returns the public root shared service.
     *
     * @return \stdClass
     */
    protected function get3d31ba1074658750b148b9cc51d4de80228bfec23e178041c0b149bd48569a83(): \stdClass
    {
        $a = new \Viserio\Component\Container\Tests\Fixture\Circular\FooForCircularWithAddCalls();

        $b = new \stdClass();

        $a->call(new \stdClass(new \stdClass($b, ($this->privates['level5'] ?? $this->getd78110b59e9ef3072f06cab92c1ba80b4afc05a448de8eabde3748fe54618140()))));

        return $this->services['root'] = new \stdClass($a, $b);
    }

    /**
     * Returns the public subscriber shared service.
     *
     * @return \stdClass
     */
    protected function get0eca54c9f4d159ea8c54976edd1ce37cc0a94ddc38e56466b3663e59637866c1(): \stdClass
    {
        $a = ($this->services['manager'] ?? $this->get5bac279646e2607172e8b67bfd678afe65d03ea3018aed331961ee571fc45806());

        if (isset($this->services['subscriber'])) {
            return $this->services['subscriber'];
        }

        return $this->services['subscriber'] = new \stdClass($a);
    }

    /**
     * Returns the private bar6 shared service.
     *
     * @return \stdClass
     */
    protected function get0f8ce57bd09c7afa3debbb610300810a217d3e8ea67ea05f4b7e6668b895fb2d(): \stdClass
    {
        $a = ($this->services['foo6'] ?? $this->get8308126fb90ef115671ad06d6d1712afd548dc290d2805e6e24d1ea05d98081a());

        if (isset($this->privates['bar6'])) {
            return $this->privates['bar6'];
        }

        return $this->privates['bar6'] = new \stdClass($a);
    }

    /**
     * Returns the private level5 shared service.
     *
     * @return \stdClass
     */
    protected function getd78110b59e9ef3072f06cab92c1ba80b4afc05a448de8eabde3748fe54618140(): \stdClass
    {
        $a = new \Viserio\Component\Container\Tests\Fixture\Circular\FooForCircularWithAddCalls();

        $this->privates['level5'] = $instance = new \stdClass($a);

        $a->call($instance);

        return $instance;
    }

    /**
     * Returns the private manager4 shared service.
     *
     * @return \stdClass
     */
    protected function get6ea312c3728ef9dd8ce4fa67b23172eccc88f9ccaf14ab7ea16e7e6df2ce2342(): \stdClass
    {
        return $this->privates['manager4'] = $this->createProxy('stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641', function () {
            return stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                $a = new \stdClass();

                $b = ($this->services['listener4'] ?? $this->get6f6dc2e14bc9a50c1ceb16b063c4068cf9e3ae84cf93fbfd83503edef7156fef());

                if (isset($this->privates['manager4'])) {
                    return $this->privates['manager4'];
                }

                $a->listener = [
                    0 => $b,
                ];

                $wrappedInstance = new \stdClass($a);
                $proxy->setProxyInitializer(null);

                return true;
            });
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return [
            \Psr\Container\ContainerInterface::class => true,
            \Viserio\Contract\Container\CompiledContainer::class => true,
            \Viserio\Contract\Container\Factory::class => true,
            \Viserio\Contract\Container\TaggedContainer::class => true,
            'bar' => true,
            'bar5' => true,
            'bar6' => true,
            'config' => true,
            'config2' => true,
            'connection3' => true,
            'connection4' => true,
            'container' => true,
            'dispatcher' => true,
            'dispatcher2' => true,
            'foo4' => true,
            'foobar' => true,
            'foobar2' => true,
            'foobar3' => true,
            'level2' => true,
            'level3' => true,
            'level4' => true,
            'level5' => true,
            'level6' => true,
            'logger2' => true,
            'manager4' => true,
            'multiuse1' => true,
            'subscriber2' => true,
        ];
    }

    /**
     * Invoke a proxy instance.
     *
     * @param string   $class
     * @param \Closure $factory
     *
     * @return object
     */
    protected function createProxy(string $class, \Closure $factory): object
    {
        \class_exists($class, false) || \class_alias("Viserio\\Component\\Container\\Tests\\Integration\\Dumper\\Compiled\\{$class}", $class, false);

        return $factory();
    }
}

class stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641 extends \stdClass implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder28461 = null;
    private $initializer12e08 = null;
    private static $publicProperties392f5 = [
        
    ];
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer12e08 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder28461) {
            $reflection = $reflection ?? new \ReflectionClass('stdClass');
            $this->valueHolder28461 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, '__get', ['name' => $name], $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
        if (isset(self::$publicProperties392f5[$name])) {
            return $this->valueHolder28461->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28461;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder28461;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28461;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder28461;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, '__isset', array('name' => $name), $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28461;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder28461;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, '__unset', array('name' => $name), $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28461;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder28461;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, '__clone', array(), $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
        $this->valueHolder28461 = clone $this->valueHolder28461;
    }
    public function __sleep()
    {
        $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, '__sleep', array(), $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
        return array('valueHolder28461');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer12e08 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer12e08;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer12e08 && ($this->initializer12e08->__invoke($valueHolder28461, $this, 'initializeProxy', array(), $this->initializer12e08) || 1) && $this->valueHolder28461 = $valueHolder28461;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28461;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder28461;
    }
}
