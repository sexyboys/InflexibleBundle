<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class DenamespaceExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author epidoux
 */
class DenamespaceExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'denamespace' => new \Twig_Filter_Method($this, 'DenamespaceFilter'),
        );
    }

    /**
     * Returns only the class name
     * @param $value the namespace
     * @return string the class name
     */
    public function DenamespaceFilter($value)
    {
        return Inflexible::denamespace($value);

    }

    public function getName()
    {
        return 'Inflexible_denamespace_extension';
    }
}
