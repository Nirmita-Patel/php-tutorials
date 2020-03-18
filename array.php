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