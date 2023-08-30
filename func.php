<?php
// Recursive function first and last number showing with recursion function


function Rec(int $first, $last){

    if($first>=$last){
        return 'invalid';
    }
    echo $first. "\n";
    $first++;
    Rec($first, $last);
    
}

echo Rec(10,20);


