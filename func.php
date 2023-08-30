<?php
// Recursive function 


function Rec(int $i){

    if($i>=10){
        return;
    }
    echo $i. "\n";
    $i++;
    Rec($i);
    
}

echo Rec(1);


