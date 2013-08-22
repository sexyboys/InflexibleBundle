<?php

namespace Inflexible\Twig\Extension;


/**
 * Class TableizeExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
 */
class TableizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\TableizeExtension::TableizeFilter
     */
    public function testTableizeFilter()
    {
        $extension = new TableizeExtension();
        $this->assertEquals('model_name', $extension->TableizeFilter('ModelName'));
    }
}