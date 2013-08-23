<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


use Sexyboys\InflexibleBundle\Twig\Extension\TableizeExtension;

/**
 * Class TableizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class TableizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Sexyboys\InflexibleBundle\Twig\Extension\TableizeExtension::TableizeFilter
     */
    public function testTableizeFilter()
    {
        $extension = new TableizeExtension();
        $this->assertEquals('model_name', $extension->TableizeFilter('ModelName'));
    }
}