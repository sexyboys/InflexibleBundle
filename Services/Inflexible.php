<?php
namespace Sexyboys\InflexibleBundle\Services;


use Doctrine\Common\Inflector\Inflector as DoctrineCommonInflector;
use Inflexible\Datetime\Relative;
use Inflexible\Number\HumanByte;
use Inflexible\Number\Ordinalize;
use Inflexible\Number\Shorten as NumberShortener;
use Inflexible\Number\Textualize;
use Inflexible\String\Camelize;
use Inflexible\String\Denamespace;
use Inflexible\String\Humanize;
use Inflexible\String\NamespaceOnly;
use Inflexible\String\Shorten as StringShortener;
use Inflexible\String\Slugify;

/**
 * Class Inflexible : Interface Service of Inflexible library
 * @package Sexyboys\InflexibleBundle\Services
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @author Boris Guéry <guery.b@gmail.com>
 * @version 1.0
 */
class Inflexible {

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * @see Inflexible\Datetime\Relative::inflect()
     */
    public function relativeDatetime($value, $relativeTo = null)
    {
        return Relative::inflect($value, $relativeTo);
    }

    /**
     * @see Inflexible\Number\HumanByte::inflect()
     */
    public function humanByte($bytes, $precision = null)
    {
        return HumanByte::inflect($bytes, $precision);
    }

    /**
     * @see Inflexible\Number\Ordinalize::inflect()
     */
    public function ordinalize($number)
    {
        return Ordinalize::inflect($number);
    }

    /**
     * @see Inflexible\Number\Textualize::inflect()
     */
    public function textualize($number)
    {
        return Textualize::inflect($number);
    }

    /**
     * @see Inflexible\String\Relative::inflect()
     */
    public function camelize($string)
    {
        return Camelize::inflect($string);
    }

    /**
     * @see Inflexible\String\Relative::inflect()
     */
    public function denamespace($string)
    {
        return Denamespace::inflect($string);
    }

    /**
     * @see Inflexible\String\Relative::inflect()
     */
    public function namespaceOnly($string)
    {
        return NamespaceOnly::inflect($string);
    }

    /**
     * @see Inflexible\String\Relative::inflect()
     */
    public function humanize($string)
    {
        return Humanize::inflect($string);
    }

    /**
     * @see Inflexible\String\Relative::inflect()
     */
    public function slugify($string,array $options = null)
    {
        return Slugify::inflect($string,$options);
    }

    /**
     * @see Inflexible\Number\Shorten::inflect()
     */
    public function shortenNumber($number, $roundMode = null)
    {
        return NumberShortener::inflect($number, $roundMode);
    }

    /**
     * @see Inflexible\String\Shorten::inflect()
     */
    public function shortenString($string, $maxLength = null, $affix = null, $affixPosition = null)
    {
        return StringShortener::inflect($string, $maxLength, $affix, $affixPosition);
    }

    /**
     * @see Doctrine\Common\Inflector\Inflector::pluralize()
     */
    public function pluralize($word)
    {
        return DoctrineCommonInflector::pluralize($word);
    }

    /**
     * @see Doctrine\Common\Inflector\Inflector::singularize()
     */
    public function singularize($word)
    {
        return DoctrineCommonInflector::singularize($word);
    }

    /**
     * @see Doctrine\Common\Inflector\Inflector::tableize()
     */
    public function tableize($word)
    {
        return DoctrineCommonInflector::tableize($word);
    }


}