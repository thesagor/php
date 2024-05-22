<?php
//data read
$data = 'C:/Users/User/Desktop/php/inc/file2.txt';
$olddata = file_get_contents($data);
$fo = fopen($data, "w");
$existed = fwrite($fo, $olddata);
fwrite($fo, "Plito\n");
fwrite($fo, "neptun\n");
fwrite($fo, "navakump\n");


fclose($fo);











