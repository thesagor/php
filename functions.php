//creating function working value<?php

function checktoEven($n)
{ //$n is peramater and checktoEven is function name \n
    echo PHP_EOL;
    if($n%2==0){
        return true;

    }
    else{
        return false;
    }
}

$x=25;
if(checktoEven($x)){
    echo " $x is even number so no worries";
}
else{
    echo "This is not even number so it is odd number";
}

