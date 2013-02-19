<?php


class SolutionListener implements Listener
{
    private $currentResult;
    public function __construct()
    {
        $this->currentResult = 0;
    }

    public function listen($nr)
    {
        $this->currentResult += $nr;
    }

    public function getCurrentResult()
    {
        return $this->currentResult;
    }
}