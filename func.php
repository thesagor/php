<?php  
//Common elements identify from the array

$fruits=["Apple", "Bannana","Cadbium","jackfruit","pineapple","abogoda","JADU",'Jadu' ,"ciege","Banana"];
$numbers= [12,33,2,234,34,32,1,11,33,22,555,3,4,5];
$knumber= ['a'=>10, 'd'=> 15, 'c'=>12, 'f'=>11];
$desifruits= ["Mango", "Lemon", "Banana", "Jackfruits", "JADU"];

$common= array_intersect($desifruits,$fruits);
print_r($common);

