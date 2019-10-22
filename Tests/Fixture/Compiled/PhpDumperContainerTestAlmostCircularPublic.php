<?php

declare(strict_types=1);

namespace Viserio\Component\Container\Tests\IntegrationTest\Dumper\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class PhpDumperContainerTestAlmostCircularPublic extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * Create a new Compiled Container instance.
     */
    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMapping = [
            'bar' => 'get91b123d3875702532e36683116824223d37b37377003156fc244abb2a82fec9c',
            'bar3' => 'get5ad625d0fc6832ddd368c93f0a20adcc459bcfb67179cd1783b720e4f5b37782',
            'bar5' => 'getc286ba1c69d88bc6b8d65cf20efb863a4d813bf47a54187fa5a01a321b354687',
            'baz6' => 'get99be4ce0ce1312e640bb778058698e66e525e80596ecccc2bb9cbec3bea0e054',
            'connection' => 'get99c4de5c2787a5000cc22e2c8c072c6bd9563ea3a9e35e0d2127c2fe9b18d7b2',
            'connection2' => 'get0b37d084e0922f6a7a9ab1a80b814af9b9b118cb2449560fd3c1d1350e410aa5',
            'connection3' => 'get9e256708ae1ebadebfb32b4231e6b435f83c3af2d496054ef3767776837b28fb',
            'connection4' => 'get9e52e65459e860996dd848071c1bed023bae0dce3a029b702070b6a1cd9d38c6',
            'dispatcher' => 'get70eb7ff57a04f7d1b782f7cbeac647f2b4617d1fd3f51038b3d8bde5db8e2ae9',
            'dispatcher2' => 'get5079bef39a10b652aeca41290e7361659a2c181036ea13a30a326d2de4f0921b',
            'foo' => 'get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f',
            'foo2' => 'get0670b9ceea787e883f11345117450966a7b98927ce9dff50dbd585bcf9d32d46',
            'foo4' => 'get7f1c46ea14a6f5a94348195dbe87668a77b382d3a1b51e510adb856dd5233981',
            'foo5' => 'get704437cf7a16a0d55e5c079959ab6dc25148e640cca407cd4c820a63cf559d54',
            'foo6' => 'get8308126fb90ef115671ad06d6d1712afd548dc290d2805e6e24d1ea05d98081a',
            'foobar' => 'getdb3c1fd650bb16a157f6a2eeedf61e9c9bb749b772fb9d7e3290190e5b3029fd',
            'foobar2' => 'get8622fa2d6907960ef671ad0fd6199fb7820e4dcb93953b336dcd91dea04a13c2',
            'foobar3' => 'get69f36f227731f868b6fd1f83ca139cab1cec5cd44388711d4c1c9a4d646e5503',
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
     * Returns the public bar shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular
     */
    protected function get91b123d3875702532e36683116824223d37b37377003156fc244abb2a82fec9c(): \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular
    {
        $this->services['bar'] = $instance = new \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular();

        $instance->addFoobar(($this->services['foobar'] ?? $this->getdb3c1fd650bb16a157f6a2eeedf61e9c9bb749b772fb9d7e3290190e5b3029fd()));

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

        $a = ($this->services['foobar3'] ?? $this->get69f36f227731f868b6fd1f83ca139cab1cec5cd44388711d4c1c9a4d646e5503());

        $instance->addFoobar($a, $a);

        return $instance;
    }

    /**
     * Returns the public bar5 shared service.
     *
     * @return \stdClass
     */
    protected function getc286ba1c69d88bc6b8d65cf20efb863a4d813bf47a54187fa5a01a321b354687(): \stdClass
    {
        $a = ($this->services['foo5'] ?? $this->get704437cf7a16a0d55e5c079959ab6dc25148e640cca407cd4c820a63cf559d54());

        if (isset($this->services['bar5'])) {
            return $this->services['bar5'];
        }

        $this->services['bar5'] = $instance = new \stdClass($a);

        $instance->foo = $a;

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
        $a = ($this->services['dispatcher'] ?? $this->get70eb7ff57a04f7d1b782f7cbeac647f2b4617d1fd3f51038b3d8bde5db8e2ae9());

        if (isset($this->services['connection'])) {
            return $this->services['connection'];
        }
        $b = new \stdClass();

        $this->services['connection'] = $instance = new \stdClass($a, $b);

        $b->logger = ($this->services['logger'] ?? $this->get6bccd5dc1683fe9ec48a06d8bf599ba5c0517c7cf408fd083779c5dcbe7d3e76());

        return $instance;
    }

    /**
     * Returns the public connection2 shared service.
     *
     * @return \stdClass
     */
    protected function get0b37d084e0922f6a7a9ab1a80b814af9b9b118cb2449560fd3c1d1350e410aa5(): \stdClass
    {
        $a = ($this->services['dispatcher2'] ?? $this->get5079bef39a10b652aeca41290e7361659a2c181036ea13a30a326d2de4f0921b());

        if (isset($this->services['connection2'])) {
            return $this->services['connection2'];
        }
        $b = new \stdClass();

        $this->services['connection2'] = $instance = new \stdClass($a, $b);

        $c = new \stdClass($instance);
        $c->handler2 = new \stdClass(($this->services['manager2'] ?? $this->get664501843c1fcb2c9ce8ed0d2393065ffed3acb8b22781e5bba499a9a63d37c7()));

        $b->logger2 = $c;

        return $instance;
    }

    /**
     * Returns the public connection3 shared service.
     *
     * @return \stdClass
     */
    protected function get9e256708ae1ebadebfb32b4231e6b435f83c3af2d496054ef3767776837b28fb(): \stdClass
    {
        $this->services['connection3'] = $instance = new \stdClass();

        $instance->listener = [
            0 => ($this->services['listener3'] ?? $this->getf8684f2dcc3d10793d85f8c9adc5a64aedfa15f0bd74d2839d9b7ce85113c7dc()),
        ];

        return $instance;
    }

    /**
     * Returns the public connection4 shared service.
     *
     * @return \stdClass
     */
    protected function get9e52e65459e860996dd848071c1bed023bae0dce3a029b702070b6a1cd9d38c6(): \stdClass
    {
        $this->services['connection4'] = $instance = new \stdClass();

        $instance->listener = [
            0 => ($this->services['listener4'] ?? $this->get6f6dc2e14bc9a50c1ceb16b063c4068cf9e3ae84cf93fbfd83503edef7156fef()),
        ];

        return $instance;
    }

    /**
     * Returns the public dispatcher shared service.
     *
     * @return \stdClass
     */
    protected function get70eb7ff57a04f7d1b782f7cbeac647f2b4617d1fd3f51038b3d8bde5db8e2ae9(): \stdClass
    {
        return $this->services['dispatcher'] = $this->createProxy('stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641', function () {
            return stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                $instance = new \stdClass();

                $instance->subscriber = ($this->services['subscriber'] ?? $this->get0eca54c9f4d159ea8c54976edd1ce37cc0a94ddc38e56466b3663e59637866c1());

                $wrappedInstance = $instance;

                $proxy->setProxyInitializer(null);

                return true;
            });
        });
    }

    /**
     * Returns the public dispatcher2 shared service.
     *
     * @return \stdClass
     */
    protected function get5079bef39a10b652aeca41290e7361659a2c181036ea13a30a326d2de4f0921b(): \stdClass
    {
        return $this->services['dispatcher2'] = $this->createProxy('stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641', function () {
            return stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                $instance = new \stdClass();

                $instance->subscriber2 = new \stdClass(($this->services['manager2'] ?? $this->get664501843c1fcb2c9ce8ed0d2393065ffed3acb8b22781e5bba499a9a63d37c7()));

                $wrappedInstance = $instance;

                $proxy->setProxyInitializer(null);

                return true;
            });
        });
    }

    /**
     * Returns the public foo shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
     */
    protected function get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f(): \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
    {
        $a = ($this->services['bar'] ?? $this->get91b123d3875702532e36683116824223d37b37377003156fc244abb2a82fec9c());

        if (isset($this->services['foo'])) {
            return $this->services['foo'];
        }

        return $this->services['foo'] = new \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular($a);
    }

    /**
     * Returns the public foo2 shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
     */
    protected function get0670b9ceea787e883f11345117450966a7b98927ce9dff50dbd585bcf9d32d46(): \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular
    {
        $a = new \Viserio\Component\Container\Tests\Fixture\Circular\BarCircular();

        $this->services['foo2'] = $instance = new \Viserio\Component\Container\Tests\Fixture\Circular\FooCircular($a);

        $a->addFoobar(($this->services['foobar2'] ?? $this->get8622fa2d6907960ef671ad0fd6199fb7820e4dcb93953b336dcd91dea04a13c2()));

        return $instance;
    }

    /**
     * Returns the public foo4 service.
     *
     * @return \stdClass
     */
    protected function get7f1c46ea14a6f5a94348195dbe87668a77b382d3a1b51e510adb856dd5233981(): \stdClass
    {
        $instance = new \stdClass();

        $instance->foobar = ($this->services['foobar4'] ?? $this->geta04ef8e272e315248e82811274fb69a327c60979ae0c360be5144aa318da971f());

        return $instance;
    }

    /**
     * Returns the public foo5 shared service.
     *
     * @return \stdClass
     */
    protected function get704437cf7a16a0d55e5c079959ab6dc25148e640cca407cd4c820a63cf559d54(): \stdClass
    {
        $this->services['foo5'] = $instance = new \stdClass();

        $instance->bar = ($this->services['bar5'] ?? $this->getc286ba1c69d88bc6b8d65cf20efb863a4d813bf47a54187fa5a01a321b354687());

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
     * Returns the public foobar shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular
     */
    protected function getdb3c1fd650bb16a157f6a2eeedf61e9c9bb749b772fb9d7e3290190e5b3029fd(): \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular
    {
        $a = ($this->services['foo'] ?? $this->get55df4251026261c15e5362b72748729c5413605491a6b31caf07b0571c04af5f());

        if (isset($this->services['foobar'])) {
            return $this->services['foobar'];
        }

        return $this->services['foobar'] = new \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular($a);
    }

    /**
     * Returns the public foobar2 shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular
     */
    protected function get8622fa2d6907960ef671ad0fd6199fb7820e4dcb93953b336dcd91dea04a13c2(): \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular
    {
        $a = ($this->services['foo2'] ?? $this->get0670b9ceea787e883f11345117450966a7b98927ce9dff50dbd585bcf9d32d46());

        if (isset($this->services['foobar2'])) {
            return $this->services['foobar2'];
        }

        return $this->services['foobar2'] = new \Viserio\Component\Container\Tests\Fixture\Circular\FoobarCircular($a);
    }

    /**
     * Returns the public foobar3 shared service.
     *
     * @return \Viserio\Component\Container\Tests\Fixture\Circular\DummyFoobarCircular
     */
    protected function get69f36f227731f868b6fd1f83ca139cab1cec5cd44388711d4c1c9a4d646e5503(): \Viserio\Component\Container\Tests\Fixture\Circular\DummyFoobarCircular
    {
        return $this->services['foobar3'] = new \Viserio\Component\Container\Tests\Fixture\Circular\DummyFoobarCircular();
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
                $a = ($this->services['connection3'] ?? $this->get9e256708ae1ebadebfb32b4231e6b435f83c3af2d496054ef3767776837b28fb());

                if (isset($this->services['manager3'])) {
                    return $this->services['manager3'];
                }

                $wrappedInstance = new \stdClass($a);
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
                $a = ($this->services['connection4'] ?? $this->get9e52e65459e860996dd848071c1bed023bae0dce3a029b702070b6a1cd9d38c6());

                if (isset($this->privates['manager4'])) {
                    return $this->privates['manager4'];
                }

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
            \Viserio\Contract\Container\Factory::class => true,
            \Viserio\Contract\Container\TaggedContainer::class => true,
            'bar2' => true,
            'bar6' => true,
            'config' => true,
            'config2' => true,
            'container' => true,
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
        \class_exists($class, false) || \class_alias("Viserio\\Component\\Container\\Tests\\IntegrationTest\\Dumper\\Compiled\\{$class}", $class, false);

        return $factory();
    }
}

class stdClass_7505e02fc61bdbec8ef82430242d0041c28f8477d8fc1e70135fd3b6d304a641 extends \stdClass implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercf605 = null;
    private $initializerb6dc2 = null;
    private static $publicProperties9ad5d = [
        
    ];
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        $instance->initializerb6dc2 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHoldercf605) {
            $reflection = $reflection ?? new \ReflectionClass('stdClass');
            $this->valueHoldercf605 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, '__get', ['name' => $name], $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
        if (isset(self::$publicProperties9ad5d[$name])) {
            return $this->valueHoldercf605->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf605;
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
        $targetObject = $this->valueHoldercf605;
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
        $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf605;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldercf605;
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
        $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, '__isset', array('name' => $name), $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf605;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldercf605;
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
        $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, '__unset', array('name' => $name), $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf605;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldercf605;
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
        $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, '__clone', array(), $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
        $this->valueHoldercf605 = clone $this->valueHoldercf605;
    }
    public function __sleep()
    {
        $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, '__sleep', array(), $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
        return array('valueHoldercf605');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerb6dc2 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerb6dc2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb6dc2 && ($this->initializerb6dc2->__invoke($valueHoldercf605, $this, 'initializeProxy', array(), $this->initializerb6dc2) || 1) && $this->valueHoldercf605 = $valueHoldercf605;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf605;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHoldercf605;
    }
}