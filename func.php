<?php
// Recursive function first and last number showing with recursion function

function factorial(int $n){
    if($n<=1){
        return 1;
    }

    return $n*factorial($n-1);
}

$show=  factorial(5);
echo $show;



