<?php

namespace Inflexible\Twig\Extension;


/**
 * Class RelativeDatetimeStringExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
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