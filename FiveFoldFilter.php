<?php
/**
 * User: dS
 * Date: 15/02/13
 * Time: 21:02
 */
class FiveFoldFilter implements MultipleFilter
{

    public function filter($number)
    {
        if ($number % 5 == 0)
            return true;
        return false;
    }
}
