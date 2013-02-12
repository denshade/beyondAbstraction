<?php
/**
 * User: lieven
 * Date: 12/02/13
 * Time: 13:18
 */
class SumOfMultiples
{
    public function calculate()
    {
        $sum = 0;
        for ($current = 1; $current < 1000; $current++ )
        {
            if ($current % 3 == 0 || $current % 5 == 0)
            {
                $sum += $current;
                echo $current. "\n";

            }
        }
        return $sum;
    }
}
