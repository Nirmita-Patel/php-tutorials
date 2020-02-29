<?php

$a = 10;
$b = 20;
$c = 100;

//$a = $b = $c = 20;


if($a > $b){
    echo "$a is greater!<br>";
}


if($a > $b){
    echo "$a is greater!<br>";
}else{
    echo "$b is greater!<br>";
}



if($a > $b){
    if($a > $c){
        echo "$a is greater!<br>";
    }else{
        echo "$c is greater!<br>";
    }
}else{
    if($b > $c){
        echo "$b is greater!<br>";
    }else{
        echo "$c is greater!<br>";
    }
}


$marks = 80;

if (100>=$marks && $marks>=80) {
    echo "A<br>";
} else if(80>$marks && $marks>=60){
    echo "B<br>";
}else if(60>$marks && $marks>=50){
    echo "C<br>";
}else if(50>$marks && $marks>=35){
    echo "D<br>";
}else if(35>$marks && $marks>=0){
    echo "Fail<br>";
}else{
    echo "Invalid<br>";
}

