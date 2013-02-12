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

    const THREE = 3;
    const FIVE  = 5;

    public function calculate()
    {
        $sum = 0;
        for ($current = self::BEGIN; $current < self::END; $current++ )
        {
            if ($current % self::THREE == 0 || $current % self::FIVE == 0)
            {
                $sum += $current;
            }
        }
        return $sum;
    }
}
