<?php

namespace Inflexible\Twig\Extension;


/**
 * Class ShortenNumberExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
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