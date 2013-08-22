<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class OrdinalizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class OrdinalizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'ordinalize' => new \Twig_Filter_Method($this, 'OrdinalizeFilter'),
        );
    }

    /**
     * Convert number to its ordinal English form
     * @param $value the number
     * @return string representation
     */
    public function OrdinalizeFilter($value)
    {
        return Inflexible::ordinalize($value);

    }

    public function getName()
    {
        return 'Inflexible_ordinalize_extension';
    }
}
