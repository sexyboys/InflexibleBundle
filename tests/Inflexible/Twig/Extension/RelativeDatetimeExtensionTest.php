<?php

namespace Inflexible\Twig\Extension;


/**
 * Class RelativeDatetimeExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
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