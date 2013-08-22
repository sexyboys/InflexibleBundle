<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class SlugifyExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class SlugifyExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'slugify' => new \Twig_Filter_Method($this, 'SlugifyFilter'),
        );
    }

    /**
     * Slugify a string
     * @param $value the string
     * @param array the options (max length, lowercase,separator)
     * @return string the slugified string
     */
    public function SlugifyFilter($value,$options=array())
    {
        return Inflexible::slugify($value,$options);

    }

    public function getName()
    {
        return 'Inflexible_slugify_extension';
    }
}
