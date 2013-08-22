<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class RelativeDatetimeExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class RelativeDatetimeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'relative_datetime' => new \Twig_Filter_Method($this, 'relativeDatetimeFilter'),
        );
    }

    /**
     * Convert a DateTime object or number a number of seconds into the most fitted unit
     * 3 ways to used it:
     *    user.date|relativeDatetime(other.date) => render the difference between the 2 dates given
     *    user.date|relativeDatetime => render the difference between now and the first date given
     *    86400|relativeDatetime => render the most fitted unit
     * @param $first The first datetime or number of seconds
     * @param $second The second datetime (most recent) optional
     * @return Array(first element is the value, the second is the unit)
     */
    public function relativeDatetimeFilter($first,$second=null)
    {
        if($first instanceof \DateTime)
        {
            if($second!=null){
                //first case
                $result = Inflexible::relativeDatetime($first,$second);
            }
            else{
                //second case
                $result = Inflexible::relativeDatetime($first,new \DateTime());
            }
        }
        else{
            //numeric : third case
            $result = Inflexible::relativeDatetime($first);
        }
        return $result;

    }

    public function getName()
    {
        return 'Inflexible_relative_datetime_extension';
    }
}
