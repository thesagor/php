<?php  
//Common elements identify from the array

$fruits=["Apple", "Bannana","Cadbium","jackfruit","pineapple","abogoda","JADU",'Jadu' ,"ciege","Banana"];
$numbers= [12,33,2,234,34,32,1,11,33,22,555,3,4,5];
$number1= ['a'=>10, 'b'=> 15, 'c'=>122, 'd'=>113];
$number2= ['d'=>110, 'g'=> 125, 'd'=>113, 'f'=>11];
$desifruits= ["mango", "Lemon", "Banana", "Jackfruits", "JADU","manno", "manus", "Mama"];

//list function of array
 $n= range(01,50);
$rn=mt_rand(5,10);
$mynum= $n[$rn];

if($mynum%2==0){
    echo "Head";
}else{
    echo "Tail";
}




