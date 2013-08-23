<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;

use Sexyboys\InflexibleBundle\Twig\Extension\PluralizeExtension;

/**
 * Class PluralizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class PluralizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Sexyboys\InflexibleBundle\Twig\Extension\PluralizeExtension::PluralizeFilter
     */
    public function testPluralizeFilter()
    {
        $extension = new PluralizeExtension();
        $this->assertEquals('children', $extension->PluralizeFilter("child"));
    }
}