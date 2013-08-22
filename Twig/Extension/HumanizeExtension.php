<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class HumanizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class HumanizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'humanize' => new \Twig_Filter_Method($this, 'HumanizeFilter'),
        );
    }

    /**
     * Converts CamelCased word and underscore to space to return a readable string
     * @param $value the namespace
     * @return string the readable string
     */
    public function HumanizeFilter($value)
    {
        return Inflexible::humanize($value);

    }

    public function getName()
    {
        return 'Inflexible_humanize_extension';
    }
}
