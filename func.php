<?php  
//Common elements identify from the array

$fruits=["Apple", "Bannana","Cadbium","jackfruit","pineapple","abogoda","JADU",'Jadu' ,"ciege","Banana"];
$numbers= [12,33,2,234,34,32,1,11,33,22,555,3,4,5];
$number1= ['a'=>10, 'b'=> 15, 'c'=>122, 'd'=>113];
$number2= ['d'=>110, 'g'=> 125, 'd'=>113, 'f'=>11];
$desifruits= ["mango", "Lemon", "Banana", "Jackfruits", "JADU","manno", "manus", "Mama"];

$num= [1,2,3,4,5,6,7,8,9,10,11,12,13,14];


function mcheck($m){
    return $m[0]=="m";
}

function odd($n){
    return $n%2==1;
}

$mchecked= array_filter($desifruits,'mcheck');
//$oddcheck = array_filter($num,'odd');
print_r($mchecked);
//print_r($oddcheck);
