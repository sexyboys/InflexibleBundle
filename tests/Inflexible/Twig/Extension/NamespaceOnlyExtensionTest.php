<?php

namespace Inflexible\Twig\Extension;


/**
 * Class NamespaceOnlyExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
 */
class NamespaceOnlyExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\NamespaceOnlyExtension::NamespaceOnlyFilter
     */
    public function testNamespaceOnlyFilter()
    {
        $extension = new NamespaceOnlyExtension();
        $this->assertEquals('Foo', $extension->NamespaceOnlyFilter('\Foo\Bar'));
    }
}