<?php

namespace Inflexible\Twig\Extension;


/**
 * Class SlugifyExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
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