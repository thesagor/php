<?php
//work with function

function factorial($n){
    $fac=1;
    for($i=$n; $i>0; $i--){
        $fac*=$i;
    }
    return $fac;
}
echo factorial(6);



