<?php
// ternary Operator using itn this class
$n=14;

if(12==$n){
    echo "This is Tweleve";
}elseif(13==$n){
    echo " This is thirteen";
}else{
    echo " This is simple number not directed";
}
echo "\n";
$ttr = (12 == $n) ? "This is 12" : " $n Just a number";
echo $ttr;
echo "\n";

$find = ($n%2==0) ? " This is even number" : " Thiss is Odd number";
echo $find;
 echo "\n";

$result= (12 == $n) ? "Rhis is 12" : (13 == $n) ? "this is 13" : " TThis is not a NUMBER ";
echo $result;

