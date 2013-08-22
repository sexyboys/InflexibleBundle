<?php

namespace Sexyboys\InflexibleBundle\Twig\Extension;

use Inflexible\Inflexible;

/**
 * Class RelativeDatetimeStringExtension
 * @package Sexyboys\InflexibleBundle\Twig\Extension
 * @author Eric Pidoux <eric.pidoux@gmail.com>
 * @version 1.0
 */
class RelativeDatetimeStringExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'relative_datetime_tostring' => new \Twig_Filter_Method($this, 'relativeDatetimeStringFilter'),
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
     * @return the string representation
     */
    public function relativeDatetimeStringFilter($first,$second=null)
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

        //Convert the array into a readable string
        $string = "";
        if(count($result)>=1){
            if($result[0]>1){
                $unit =  Inflexible::pluralize($result[1]);
            }
            else $unit = $result[1];

            $string = $result[0]." ".$unit;

        }

        return $string;

    }

    public function getName()
    {
        return 'Inflexible_relative_datetime_tostring_extension';
    }
}
