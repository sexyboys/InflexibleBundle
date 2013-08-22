<?php

namespace Inflexible\Twig\Extension;


/**
 * Class ShortenStringExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
 */
class ShortenStringExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\ShortenStringExtension::ShortenStringFilter
     */
    public function testShortenStringFilter()
    {
        $extension = new ShortenStringExtension();
        $this->assertEquals('L', $extension->ShortenStringFilter('Lorem ipsum dolor sid amet',1));
    }
}