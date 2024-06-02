<?php
//data read
$data = 'C:/Users/User/Desktop/php/inc/info.txt';
file_put_contents($data, file_get_contents('inc/file2.txt'), FILE_APPEND | LOCK_EX);










