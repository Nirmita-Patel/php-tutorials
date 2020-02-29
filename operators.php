<?php

$a = 100;
$b = 20;

echo("<p style='color:tomato;'>Hello 1</p>");

echo "<p>Hello 2</p>";

print("<p style='color:tomato;'>Hello 1</p>");
/**
 * Arithmetic & Increment & Decrement
 * 
 */
$c = $a + $b;
echo "addition : $c<br>";

$c = $a - $b;
echo "sub : $c<br>";

$c = $a * $b;
echo "mul : $c<br>";

$c = $a / $b;
echo "div : $c<br>";

$c = $a % $b;
echo "mod : $c<br>";

$c = $a++ + ++$a;
echo "++ : $c<br>";

$c = $b-- + --$b;
echo "-- : $c<br>";

///
$c = $a ** 2;
echo "** : $c<br>";

/***
 * Relational Operator
 * > < >= <= (!= ==) (!== ===) 
 */
$c = $a > $b;
echo "> : $c<br>";
var_dump($c);

$c = $a < $b;
echo "< : $c<br>";
var_dump($c);

$c = $a >= $b;
echo ">= : $c<br>";
var_dump($c);

$c = $a <= $b;
echo "<= : $c<br>";
var_dump($c);


$c = $a != $b;
echo "!= : $c<br>";
var_dump($c);

$c = $a == $b;
echo "== : $c<br>";
var_dump($c);

$c = 10 === '10';//strict matching type && value
echo "=== : $c<br>";
var_dump($c);

$c = 10 !== '10';//strict matching type && value
echo "=== : $c<br>";
var_dump($c);

$c = ($a > $b)?'<b>A is greter</b>':'<i>B is greter</i>';
echo "$c<br>";

/*

*******************************************************************
*                       Addition = 10                             *
*                       Substraction = 10                         *
*                       Mul = 10                                  *
*                       Div = 10                                  *
*******************************************************************

 */

/**
 * Logical Operator -> Relation Operator
 * && || ^ !
 */
$marks = -78;

$c = (100>=$marks && $marks>=80)?'A':'-';
echo "$c<br>";
$c = (80>$marks && $marks>=60)?'B':'-';
echo "$c<br>";
$c = (60>$marks && $marks>=50)?'C':'-';
echo "$c<br>";
$c = (50>$marks && $marks>=35)?'D':'-';
echo "$c<br>";
$c = (35>$marks && $marks>=0)?'F':'-';
echo "$c<br>";
$c = (100<$marks || $marks<0)?'Invalid':'-';
echo "$c<br>";
$c = !(100>=$marks && $marks>=0)?'Invalid':'-';
echo "$c<br>";

$a = 100;
$b = 100;
$c = ($a>$b ^ $b>$a);
echo "$c<br>";

/**
 * Assignment
 * 
 * +=
 * -=
 * *=
 * /=
 * %=
 * 
 * .=
 * **=
 */
$c = 10;
echo "$c<br>";
$c += 2;
echo "$c<br>";
$c -= 2;
echo "$c<br>";
$c *= 2;
echo "$c<br>";
$c /= 2;
echo "$c<br>";
$c %= 2;
echo "$c<br>";
$c **= 2;
echo "$c<br>";
$c .= 2;
echo "$c<br>";
