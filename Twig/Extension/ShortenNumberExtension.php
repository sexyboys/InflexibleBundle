<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class ShortenNumberExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class ShortenNumberExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'shorten_number' => new \Twig_Filter_Method($this, 'ShortenNumberFilter'),
        );
    }

    /**
     * Formats a number or a string using the SI units (k, M, G, etc.)
     * @param $value the number
     * @return array representation
     */
    public function ShortenNumberFilter($value)
    {
        return Inflexible::shortenNumber($value);

    }

    public function getName()
    {
        return 'Inflexible_shorten_number_extension';
    }
}
