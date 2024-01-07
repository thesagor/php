<?php

//work with function

function factorial($n){
    $fac=1;
    for($i=$n; $i>0; $i--){
        $fac*=$i;
    }
    return $fac;
}


//optional perameter learning

function daoyat($poramanik, $samsu){
    return " poramniker bari theke $poramanik and samsu er bari theke $samsu daouayat paise";
}

//sumation of 3 numbers
function sumfixed(int $x,int $y,int $z):int {
    return $x+$y+$z;
}
function sum(int ...$numbers):int {
    $result=0;
    foreach($numbers as $num){
        $result+=$num;
    }
    return $result;
}



