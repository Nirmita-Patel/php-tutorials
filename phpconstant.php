<?php
define('APP_NAME', 'PHP DEMO - v1');
define('VERSION','1.0.1');
define('AUTHOR','Sumit More');
define('URL',"http://localhost/php.tut/");


if(defined('APP_NAME')) {
    echo 'Already Exists!'; 
    die;
}else{
    define('APP_NAME', 'PHP DEMO - v2');
}
echo APP_NAME."<br>";