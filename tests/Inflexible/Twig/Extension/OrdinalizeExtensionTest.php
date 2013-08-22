<?php

namespace Inflexible\Twig\Extension;


/**
 * Class OrdinalizeExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
 */
class OrdinalizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\OrdinalizeExtension::OrdinalizeFilter
     */
    public function testOrdinalizeFilter()
    {
        $extension = new OrdinalizeExtension();
        $this->assertEquals('1001st', $extension->OrdinalizeFilter(1001));
    }
}