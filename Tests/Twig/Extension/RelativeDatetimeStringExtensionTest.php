<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class RelativeDatetimeStringExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class RelativeDatetimeStringExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\RelativeDatetimeStringExtension::relativeDatetimeStringFilter
     */
    public function testRelativeDatetimeStringFilter()
    {
        $extension = new RelativeDatetimeStringExtension();
        $this->assertEquals('1 minute', $extension->relativeDatetimeStringFilter(60));
    }
}