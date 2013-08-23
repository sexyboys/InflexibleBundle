<?php

namespace Sexyboys\InflexibleBundle\Tests\Twig\Extension;

use Sexyboys\InflexibleBundle\Twig\Extension\HumanByteExtension;

/**
 * Class HumanByteExtensionTest
 * @package Sexyboys\InflexibleBundle\Tests\Twig\Extension
 * @author epidoux
 */
class HumanByteExtensionTest extends \PHPUnit_Framework_TestCase{

    /**
     * @covers Inflexible\Twig\Extension\HumanByteExtension::HumanByteFilter
     */
    public function testHumanByteFilter()
    {
        $extension = new HumanByteExtension();
        $this->assertEquals('1.00 GB', $extension->HumanByteFilter(1073741824));
    }
}