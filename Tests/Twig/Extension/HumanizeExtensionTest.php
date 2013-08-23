<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


use Sexyboys\InflexibleBundle\Twig\Extension\HumanizeExtension;

/**
 * Class HumanizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author epidoux
 */
class HumanizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Sexyboys\InflexibleBundle\Twig\Extension\HumanizeExtension::HumanizeFilter
     */
    public function testHumanizeFilter()
    {
        $extension = new HumanizeExtension();
        $this->assertEquals('Eric Pidoux', $extension->HumanizeFilter("eric_pidoux"));
    }
}