<?php

namespace Inflexible\Twig\Extension;


/**
 * Class SingularizeExtensionTest
 * @package Inflexible\Twig\Extension
 * @author epidoux
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