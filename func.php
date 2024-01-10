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
function sum(int $x,int $y,int ...$numbers):int {
    $result=0;
    foreach($numbers as $num){
        $result+=$num;
    }
    return $x+$y+$result;
}


function printN($x)
{
    if($x>100) {
        return;
    }
    echo $x. "\n";
    $x++;
    printN($x);

}


function sumofTwoNum($x,$y){
    if($x>$y){
        return;
    }
    $x++;
    return $x+sumofTwoNum($x,$y);

}



//recursion function
 function stend($x, $y, $step){
    if($x>$y){
        return;
    }
    echo $x."\n";
    $x+=$step;
    stend($x,$y,$step);
 }

 //make factorial number with recursion
function factor($n)
{
    if($n==1 || $n<=0) {
        return 1;
    }
   return $n*(factor($n-1));
}

function fibonassi($vold,$old,$newn,$end){
    if($newn>$end){
        return;
    }
    $vold++;
    echo "$vold". "\n";
    $_temp=$vold+$old;
    $old=$vold;
    $newn=$_temp;
    fibonassi($vold,$old,$newn,$end);

}






































