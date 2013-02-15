<?php
/**
 * User: dS
 * Date: 15/02/13
 * Time: 21:02
 */
class ThreeFoldFilter implements MultipleFilter
{

    public function filter($number)
    {
        if ($number % 3 == 0)
            return true;
        return false;
    }
}
