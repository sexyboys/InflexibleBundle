<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class CamelizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author epidoux
 */
class CamelizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\CamelizeExtension::CamelizeFilter
     */
    public function testCamelizeFilter()
    {
        $extension = new CamelizeExtension();
        $this->assertEquals('EricPidoux', $extension->CamelizeFilter("eric_pidoux"));
    }
}