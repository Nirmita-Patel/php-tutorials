<?php 
/**
 * Basic PHP File
 * 
 * Block Syntax
 * var_dump();//detail description about variable or function
 */
$a = 10;
var_dump($a);

$a = '10';
var_dump($a);

$a = "10";
var_dump($a);

$a = false;//true/false
var_dump($a);

$a = 10.2255;
var_dump($a);

$a = [1,'sumit',true,20.255];
var_dump($a);

$sumit = 25;
$a = $sumit * 2;
var_dump($a);


/**
 * isset => variable is declared or not
 */
$a = isset($sumit);
var_dump($a);



/**
 * empty: empty value checker
 */
$sumit = '';
$a = empty($sumit);
var_dump($a);

$sumit = 0;
$a = empty($sumit);
var_dump($a);

$sumit = false;
$a = empty($sumit);
var_dump($a);

$sumit = [];
$a = empty($sumit);
var_dump($a);

$sumit = 0.00;
$a = empty($sumit);
var_dump($a);

$sumit = 'sumit';
$a = empty($sumit);
var_dump($a);


$sumit = 0.02;
$a = empty($sumit);
var_dump($a);

$sumit = 120;
$a = empty($sumit);
var_dump($a);

$sumit = [1];
$a = empty($sumit);
var_dump($a);


$sumit = true;
$a = empty($sumit);
var_dump($a);

$a = function(){
    return 10;
};
var_dump($a);

