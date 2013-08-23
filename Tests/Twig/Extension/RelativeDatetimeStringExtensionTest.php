<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


use Sexyboys\InflexibleBundle\Twig\Extension\RelativeDatetimeStringExtension;

/**
 * Class RelativeDatetimeStringExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class RelativeDatetimeStringExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Sexyboys\InflexibleBundle\Twig\Extension\RelativeDatetimeStringExtension::relativeDatetimeStringFilter
     */
    public function testRelativeDatetimeStringFilter()
    {
        $extension = new RelativeDatetimeStringExtension();
        $this->assertEquals('1 minute', $extension->relativeDatetimeStringFilter(60));
    }
}