<?php  
//Common elements identify from the array

$fruits=["Apple", "Bannana","Cadbium","jackfruit","pineapple","abogoda","JADU",'Jadu' ,"ciege","Banana"];
$numbers= [12,33,2,234,34,32,1,11,33,22,555,3,4,5];
$number1= ['a'=>10, 'b'=> 15, 'c'=>122, 'd'=>113];
$number2= ['d'=>110, 'g'=> 125, 'd'=>113, 'f'=>11];
$desifruits= ["Mango", "Lemon", "Banana", "Jackfruits", "JADU"];

$num= [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

function square($n){
    return $n*$n*$n;
}

$myarr= array_map('square',$num);
print_r($myarr);
print_r($num);

