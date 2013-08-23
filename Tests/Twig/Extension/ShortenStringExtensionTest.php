<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


use Sexyboys\InflexibleBundle\Twig\Extension\ShortenStringExtension;

/**
 * Class ShortenStringExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class ShortenStringExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Sexyboys\InflexibleBundle\Twig\Extension\ShortenStringExtension::ShortenStringFilter
     */
    public function testShortenStringFilter()
    {
        $extension = new ShortenStringExtension();
        $this->assertEquals('L', $extension->ShortenStringFilter('Lorem ipsum dolor sid amet',1));
    }
}