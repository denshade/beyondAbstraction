<?php
/**
 * User: dS
 * Date: 15/02/13
 * Time: 21:21
 */
abstract class NumberFoldFilter
{
    protected $base;
    public abstract function __construct();

    public function filter($number)
    {
        if ($number % $this->base == 0)
            return true;
        return false;
    }
}
