<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class SingularizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class SingularizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\SingularizeExtension::testSingularizeFilter
     */
    public function testSingularizeFilter()
    {
        $extension = new SingularizeExtension();
        $this->assertEquals('child', $extension->SingularizeFilter("children"));
    }
}