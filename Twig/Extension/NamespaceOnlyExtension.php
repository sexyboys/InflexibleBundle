<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class NamespaceOnlyExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class NamespaceOnlyExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'namespace_only' => new \Twig_Filter_Method($this, 'NamespaceOnlyFilter'),
        );
    }

    /**
     * Returns the namespace of a fully qualified class name
     * @param $value the fully qualified class name
     * @return string the namespace
     */
    public function NamespaceOnlyFilter($value)
    {
        return Inflexible::namespaceOnly($value);

    }

    public function getName()
    {
        return 'Inflexible_namespace_only_extension';
    }
}
