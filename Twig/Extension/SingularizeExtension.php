<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Doctrine\Common\Inflector\Inflector as DoctrineCommonInflector;

/**
 * Class SingularizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class SingularizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'singularize' => new \Twig_Filter_Method($this, 'SingularizeFilter'),
        );
    }

    /**
     * singularize a word
     * @param $value the word
     * @return string
     */
    public function SingularizeFilter($value)
    {
        return DoctrineCommonInflector::singularize($value);

    }

    public function getName()
    {
        return 'Inflexible_singularize_extension';
    }
}
