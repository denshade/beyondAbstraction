<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

$sum = new SumOfMultiples();
echo $sum->calculate();