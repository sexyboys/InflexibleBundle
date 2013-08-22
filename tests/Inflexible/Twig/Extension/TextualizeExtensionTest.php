<?php

namespace Inflexible\Twig\Extension;


/**
 * Class TextualizeExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
 */
class TextualizeExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\TextualizeExtension::TextualizeFilter
     */
    public function testTextualizeFilter()
    {
        $extension = new TextualizeExtension();
        $this->assertEquals('Zero', $extension->TextualizeFilter(0));
    }
}