<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class PluzalizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class PluralizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'pluralize' => new \Twig_Filter_Method($this, 'PluralizeFilter'),
        );
    }

    /**
     * pluralize a word
     * @param $value the word
     * @return string
     */
    public function PluralizeFilter($value)
    {
        return Inflexible::pluralize($value);

    }

    public function getName()
    {
        return 'Inflexible_pluralize_extension';
    }
}
