<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class ShortenStringExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class ShortenStringExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'shorten_string' => new \Twig_Filter_Method($this, 'ShortenStringFilter'),
        );
    }

    /**
     * Formats a string
     * @param string $value
     * @param int $maxLength The max length of the shortened string, default to 80
     * @param string $affix The string to separate chunks
     * @param string $affixPosition The position of the affix, maybe 'start', 'middle', 'end' or a custom
     * @return string representation
     */
    public function ShortenStringFilter($value,$maxLength=null,$affix=null,$affixPosition=null)
    {
        return Inflexible::shortenString($value,$maxLength,$affix,$affixPosition);

    }

    public function getName()
    {
        return 'Inflexible_shorten_string_extension';
    }
}
