<?php

$vold=0;
$old=1;
$n=1;
for ($i=0; $i<10; $i++){
    echo $vold." ";
    $n=$vold+$old;
    $vold=$old;
    $old=$n;
}


