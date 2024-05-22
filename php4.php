<?php
//data read
$data = 'C:/Users/User/Desktop/php/inc/file2.txt';

$fo = fopen($data, "a");
fwrite($fo, "Plito\n");
fwrite($fo, "neptun\n");
fwrite($fo, "navakump\n");


fclose($fo);











