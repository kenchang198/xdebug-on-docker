<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$num3 = add($num1, $num2);

echo $num3;

function add($num1, $num2)
{
    return $num1 + $num2;
}