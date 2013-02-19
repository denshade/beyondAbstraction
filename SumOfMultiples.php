<?php
/**
 * User: denshade
 * Date: 12/02/13
 * Time: 13:18
 */
class SumOfMultiples
{
    private $filters;
    public function __construct()
    {
        $this->filters = array(new ThreeFoldFilter(), new FiveFoldFilter());
    }
    public function calculate()
    {
        $iterator = new NumberIterator();
        $listener = new SolutionListener();
        foreach( $iterator as $key => $current)
        {
            $addIt = false;
            foreach($this->filters as $filter)
            {
                /**
                 * @var MultipleFilter $filter
                 */
                if ($filter->filter($current))
                {
                    $addIt = true;
                }
            }
            if($addIt)
            {
                $listener->listen($current);
            }
        }
        return $listener->getCurrentResult();
    }
}
