<?php
//Unlimited parameter

function math( int ...$n):int { //this is integer
    
    for($i=0,$result=0; $i<count($n); $i++){
        $result+=$n[$i];
    }
    return $result;

    


}

echo math(20,30,30);
