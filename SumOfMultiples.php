<?php
/**
 * User: lieven
 * Date: 12/02/13
 * Time: 13:18
 */
class SumOfMultiples
{
    const BEGIN = 1;
    const END   = 1000;
    public function calculate()
    {
        $sum = 0;
        for ($current = self::BEGIN; $current < self::END; $current++ )
        {
            if ($current % 3 == 0 || $current % 5 == 0)
            {
                $sum += $current;
            }
        }
        return $sum;
    }
}
