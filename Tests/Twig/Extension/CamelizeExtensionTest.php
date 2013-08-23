<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;

use Sexyboys\InflexibleBundle\Twig\Extension\CamelizeExtension;
/**
 * Class CamelizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author epidoux
 */
class CamelizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @see Sexyboys\InflexibleBundle\Twig\Extension\CamelizeExtension::CamelizeFilter
     */
    public function testCamelizeFilter()
    {
        $extension = new CamelizeExtension();
        $this->assertEquals('EricPidoux', $extension->CamelizeFilter("eric_pidoux"));
    }
}