<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class TableizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class TableizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'tableize' => new \Twig_Filter_Method($this, 'TableizeFilter'),
        );
    }

    /**
     * Converts a word into the format for a Doctrine table name. Converts 'ModelName' to 'model_name'.
     * @param $value the word
     * @return string
     */
    public function TableizeFilter($value)
    {
        return Inflexible::tableize($value);

    }

    public function getName()
    {
        return 'Inflexible_tableize_extension';
    }
}
