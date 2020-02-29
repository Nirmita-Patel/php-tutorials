<?php

$data = "Sumit More";

echo "<h1>Hello $data</h1>";

echo '<h1>Hello $data</h1>';

echo '<h1>Hello '.$data.'</h1>';

echo "<h1>Hello ".$data."</h1>";

$table .= "<table border=1>";
$table .= "<tr>";
$table .= "<td>$data</td>";
$table .= "</tr>";
$table .= "</table>";
echo $table;