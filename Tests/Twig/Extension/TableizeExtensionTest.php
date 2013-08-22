<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class TableizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
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