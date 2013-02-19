<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

$sum = new SumOfMultiples();
if ($sum->calculate() ==233168)
{
    echo "SUCCESS";
}else
{
    echo "FAIL";
}
