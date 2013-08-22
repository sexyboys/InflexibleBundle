<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class ShortenNumberExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class ShortenNumberExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\ShortenNumberExtension::ShortenNumberFilter
     */
    public function testShortenNumberFilter()
    {
        $extension = new ShortenNumberExtension();
        $this->assertEquals(array(2,"k"), $extension->ShortenNumberFilter(2048));
    }
}