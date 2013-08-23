<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;

use Sexyboys\InflexibleBundle\Twig\Extension\RelativeDatetimeExtension;

/**
 * Class RelativeDatetimeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class RelativeDatetimeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\RelativeDatetimeExtension::relativeDatetimeFilter
     */
    public function testRelativeDatetimeFilter()
    {
        $extension = new RelativeDatetimeExtension();
        $this->assertEquals(array(1,"minute"), $extension->relativeDatetimeFilter(60));
    }
}