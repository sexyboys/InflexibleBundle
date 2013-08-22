<?php

namespace Inflexible\Twig\Extension;


/**
 * Class PluralizeExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
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