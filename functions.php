<?php

//creating  factorial number of tfounded number by function

function ffactorial($n){
    if($n<=1){
        return 1;
    }else{
        return $n*ffactorial($n-1);
    }
}




