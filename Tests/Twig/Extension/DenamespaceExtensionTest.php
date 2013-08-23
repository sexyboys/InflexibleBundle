<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;

use Sexyboys\InflexibleBundle\Twig\Extension\DenamespaceExtension;

/**
 * Class DenamespaceExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
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