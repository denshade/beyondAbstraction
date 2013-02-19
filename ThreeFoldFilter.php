<?php
/**
 * User: dS
 * Date: 15/02/13
 * Time: 21:02
 */
class ThreeFoldFilter  extends  NumberFoldFilter
{

    public function __construct()
    {
        $this->base = 3;
    }
}
