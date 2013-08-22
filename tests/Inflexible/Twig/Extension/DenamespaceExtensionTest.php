<?php

namespace Inflexible\Twig\Extension;


/**
 * Class DenamespaceExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
 */
class DenamespaceExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\DenamespaceExtension::DenamespaceFilter
     */
    public function testDenamespaceFilter()
    {
        $extension = new DenamespaceExtension();
        $this->assertEquals('Bar', $extension->DenamespaceFilter('\Foo\Bar'));
    }
}