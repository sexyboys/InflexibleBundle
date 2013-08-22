<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class PluralizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class PluralizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\PluralizeExtension::PluralizeFilter
     */
    public function testPluralizeFilter()
    {
        $extension = new PluralizeExtension();
        $this->assertEquals('children', $extension->PluralizeFilter("child"));
    }
}