<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class HumanizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author epidoux
 */
class HumanizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\HumanizeExtension::HumanizeFilter
     */
    public function testHumanizeFilter()
    {
        $extension = new HumanizeExtension();
        $this->assertEquals('Eric Pidoux', $extension->HumanizeFilter("eric_pidoux"));
    }
}