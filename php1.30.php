<?php
 
//operand operator

$x=3;
$y=4;

$result=$x<=>$y;


    if($result==1){
        echo "$x is greater than $y";
    }elseif($result==0){
        echo " $x is equal $y";
    }
    elseif($result==-1){
        echo "$x is smaller than $y";
    }
