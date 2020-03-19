<?php
//$data = [];
$data = array(1,"sumit",10.1000005,True);

for ($i=0; $i < count($data); $i++) { 
    echo $data[$i]."<br>";
}


var_dump($data);

foreach($data as $k=>$v){
    echo "$k=>$v<br>";
}


/**
 * Associative Array / Jugged Array / Key value pair
 */

$student = array(
    'id'=>1,
    'name'=>'sumit',
    'age'=>10,
    'salary'=>1000,
    'status'=>true
);

var_dump($student);
$student['dob'] = '2000-01-01';
$student['name'] = 'sumit more';
var_dump($student);


echo json_encode($student);
