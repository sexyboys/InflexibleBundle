<?php

namespace Sexyboys\InflexibleBundle\Tests\Services;

use Sexyboys\InflexibleBundle\Services\Inflexible;
/**
 * Class InflexibleTest
 * @package Sexyboys\InflexibleBundle\Tests\Services
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class InflexibleTest extends \PHPUnit_Framework_TestCase{

    protected $service;

    public function setUp()
    {
        $this->service = new Inflexible();
    }


    public function tearDown()
    {
        $this->service = null;
    }

    public function testRelativeDatetime()
    {
        $this->assertEquals(array(1,"minute"), $this->service->relativeDatetime(60));

    }

    public function testHumanByte()
    {
        $this->assertEquals("1.00 GB", $this->service->humanByte(1073741824));
    }

    public function testOrdinalize()
    {
        $this->assertEquals('1st', $this->service->ordinalize(1));
    }

    public function testTextualize()
    {
        $this->assertEquals('Zero', $this->service->textualize(0));
    }

    public function testCamelize()
    {
        $this->assertEquals('EricPidoux', $this->service->camelize("eric_pidoux"));
    }

    public function testDenamespace()
    {
        $this->assertEquals('Bar', $this->service->denamespace('\Foo\Bar'));
    }

    public function testNamespaceOnly()
    {
        $this->assertEquals('Foo', $this->service->namespaceOnly('\Foo\Bar'));
    }

    public function testHumanize()
    {
        $this->assertEquals('Eric Pidoux', $this->service->humanize('eric_pidoux'));
    }

    public function testSlugify()
    {
        $this->assertEquals('lorem-ipsum-dolor-sid-amet-x-10', $this->service->slugify('Lorem ipsum dolor sid amet x 10 .'));
    }

    public function testShortenNumber()
    {
        $this->assertEquals(array(2,"k"), $this->service->shortenNumber(2048));
    }

    public function testShortenString()
    {
        $this->assertEquals('L', $this->service->shortenString('Lorem ipsum dolor sid amet'));
    }

    public function testPluralize()
    {
        $this->assertEquals('children', $this->service->pluralize('child'));
    }

    public function testSingularize()
    {
        $this->assertEquals('child', $this->service->singularize('children'));
    }

    public function testTableize()
    {
        $this->assertEquals('model_name', $this->service->tableize('ModelName'));
    }
}