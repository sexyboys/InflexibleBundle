<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;

use Sexyboys\InflexibleBundle\Twig\Extension\OrdinalizeExtension;

/**
 * Class OrdinalizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class OrdinalizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Sexyboys\InflexibleBundle\Twig\Extension\OrdinalizeExtension::OrdinalizeFilter
     */
    public function testOrdinalizeFilter()
    {
        $extension = new OrdinalizeExtension();
        $this->assertEquals('1001st', $extension->OrdinalizeFilter(1001));
    }
}