<?php


$a = 20;
$b = 30;
$c = "+";


switch ($c) {
    case "+":
        echo '$a + $b = '.($a+$b)."<br>";
        break;
    case "-":
        echo '$a - $b = '.($a-$b)."<br>";
        break;
    default:
        echo "Invalid Case!<br>";
        break;
}