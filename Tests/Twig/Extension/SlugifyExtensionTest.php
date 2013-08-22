<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


/**
 * Class SlugifyExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class SlugifyExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\SlugifyExtension::SlugifyFilter
     */
    public function testSlugifyFilter()
    {
        $extension = new SlugifyExtension();
        $this->assertEquals('lorem-ipsum-dolor-sid-amet-x-10', $extension->SlugifyFilter('Lorem ipsum dolor sid amet x 10 .'));
    }
}