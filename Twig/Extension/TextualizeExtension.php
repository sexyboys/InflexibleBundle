<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class TextualizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class TextualizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'textualize' => new \Twig_Filter_Method($this, 'TextualizeFilter'),
        );
    }

    /**
     * Returns the textual representation of a number
     * @param $value the number
     * @return string representation
     */
    public function TextualizeFilter($value)
    {
        return Inflexible::textualize($value);

    }

    public function getName()
    {
        return 'Inflexible_textualize_extension';
    }
}
