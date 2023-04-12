<?php
 
//Null coelsing operator
$value= null;
$valueDefault= "Default value mane set koranai";


//simple way////
if(isset($value)){
    echo "Value is Null";
}else{
    echo "This is default value mane set koranai";
}


echo PHP_EOL;
//Ternary Operator
$result= $value? "value is null": "This is default value mane set kora nai";
echo $result;


echo PHP_EOL;
//coelesing operator
 $cresult= $value?? $valueDefault;
 echo $cresult;




