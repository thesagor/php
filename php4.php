<?php
//data read
$data = 'C:/Users/User/Desktop/php/inc/info.txt';
$fo = fopen($data, "a+");

$fchek = fgets($fo);
echo $fchek;
rewind($fo);


fwrite($fo, "extraday");










