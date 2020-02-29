<?php
$a = 100;
$b = 50;
echo "<P>**************************************************************************************************************</p>";

$c = $a + $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Addition': $c </span><span style='margin-left:415px'>*</span></p>";

$c = $a - $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Substrance': $c </span><span style='margin-left:410px'>*</span></p>";

$c = $a * $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Multiple': $c </span><span style='margin-left:410px'>*</span></p>";

$c = $a / $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Division': $c </span><span style='margin-left:435px'>*</span></p>";

echo "<P>**************************************************************************************************************</p>";

echo "<P>****************************************Increment & Decrement***************************************************</p>";


$c = $a % $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Modulus': $c </span><span style='margin-left:433px'>*</span></p>";

$c = $a ^ $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'XOR': $c </span><span style='margin-left:450px'>*</span></p>";

$c = $a++ + ++$a;
echo "<p><span style='margin-right:350px;'>*</span><span>'Add': $c </span><span style='margin-left:448px'>*</span></p>";

$c = $b-- + --$b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Sub': $c </span><span style='margin-left:460px'>*</span></p>";

$c = $a ** 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Mul': $c </span><span style='margin-left:435px'>*</span></p>";

echo "<P>***************************************************************************************************************</p>";


echo "<P>**************************************** * Relational Operator*****************************************************</p>";



$c = $a > $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Gretre than': $c </span><span style='margin-left:422px'>*</span></p>";

$c = $a < $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'Less than': $c </span><span style='margin-left:445px'>*</span></p>";

$c = $a >= $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'GreterEqual': $c </span><span style='margin-left:418px'>*</span></p>";

$c = $a <= $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'LessEqual': $c </span><span style='margin-left:445px'>*</span></p>";

$c = $a != $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'NotEqual': $c </span><span style='margin-left:440px'>*</span></p>";

$c = $a == $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'DoubleEqual': $c </span><span style='margin-left:430px'>*</span></p>";

$c = $a === $b;
echo "<p><span style='margin-right:350px;'>*</span><span>'TripleEqual': $c </span><span style='margin-left:440px'>*</span></p>";

$c = 10 !== '10';
echo "<p><span style='margin-right:350px;'>*</span><span>'Not DoubleEqual': $c </span><span style='margin-left:396px'>*</span></p>";

$c = ($a > $b)?'<b>A is greter</b>':'<i>B is greter</i>';
echo "<p><span style='margin-right:350px;'>*</span><span> $c </span><span style='margin-left:455px'>*</span></p>";

echo "<P>*****************************************************************************************************************</p>";

echo "<P>*****************************************************************************************************************</p>";


$a = 100;
$b = 100;
$c = ($a>$b ^ $b>$a);
echo "$c<br>";

$c = 10;
echo "<p><span style='margin-right:350px;'>*</span><span>'Equal': $c </span><span style='margin-left:467px'>*</span></p>";

$c += 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Plus Equal': $c </span><span style='margin-left:438px'>*</span></p>";

$c -= 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Sub Equal': $c </span><span style='margin-left:442px'>*</span></p>";

$c *= 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Mul Equal': $c </span><span style='margin-left:440px'>*</span></p>";

$c /= 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Div Equal': $c </span><span style='margin-left:440px'>*</span></p>";

$c %= 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Modulus Equal': $c </span><span style='margin-left:418px'>*</span></p>";

$c **= 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'DoubleMul Equal': $c </span><span style='margin-left:400px'>*</span></p>";

$c .= 2;
echo "<p><span style='margin-right:350px;'>*</span><span>'Dot Equal': $c </span><span style='margin-left:442px'>*</span></p>";

echo "<P>*****************************************************************************************************************</p>";
