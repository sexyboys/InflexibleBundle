<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class HumanByteExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author epidoux
 */
class HumanByteExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'human_byte' => new \Twig_Filter_Method($this, 'HumanByteFilter'),
        );
    }

    /**
     * Convert bytes to an human readable representation
     * @param $value the bytes
     * @param $precision (2 by default)
     * @return string representation
     */
    public function HumanByteFilter($value,$precision=null)
    {
        return Inflexible::humanByte($value,$precision);

    }

    public function getName()
    {
        return 'Inflexible_human_byte_extension';
    }
}
