<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;


use Sexyboys\InflexibleBundle\Twig\Extension\TextualizeExtension;
/**
 * Class TextualizeExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
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