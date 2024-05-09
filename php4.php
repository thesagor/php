<?php
    $string= "Hello world";
    $lenth= strlen($string);

    for ($i=$lenth-1; $i>=0; $i--){
        echo $string[$i];
    }

?>