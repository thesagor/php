<?php
//data read

$data = 'C:/Users/User/Desktop/php/inc/info.txt';
$fo = fopen($data, "r+");
$fgets = fgets($fo);

echo "$fgets";
fclose($fo);













