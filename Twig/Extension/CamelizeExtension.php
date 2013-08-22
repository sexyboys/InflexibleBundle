<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class CamelizeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author epidoux
 */
class CamelizeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'camelize' => new \Twig_Filter_Method($this, 'CamelizeFilter'),
        );
    }

    /**
     * Returns the CamelCase representation of a string
     * @param $value the string
     * @return string camelized
     */
    public function CamelizeFilter($value)
    {
        return Inflexible::camelize($value);

    }

    public function getName()
    {
        return 'Inflexible_camelize_extension';
    }
}
