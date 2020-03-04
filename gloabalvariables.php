<?php
//global variable
$x = "hello";


function display(){
    global $x;
    echo $x;
}

function display2(){
    echo $_GLOBAL['x'];
}


display();
echo "<br>".$x;
display2();




function inc(){
    static $y = 1;//last updated value
    echo $y++;
}


inc();//$y = 0 
inc();//$y = 1
inc();//$y = 2


var_dump($_SERVER);