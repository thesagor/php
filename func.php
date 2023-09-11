<?php  
//Common elements identify from the array

$fruits=["Apple", "Bannana","Cadbium","jackfruit","pineapple","abogoda","JADU",'Jadu' ,"ciege","Banana"];
$numbers= [12,33,2,234,34,32,1,11,33,22,555,3,4,5];
$number1= ['a'=>10, 'b'=> 15, 'c'=>122, 'd'=>113];
$number2= ['d'=>110, 'g'=> 125, 'd'=>113, 'f'=>11];
$desifruits= ["mango", "Lemon", "Banana", "Jackfruits", "JADU","manno", "manus", "Mama"];

$num= [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

function jogfoll($oldvalue=0, $newvalue){
    if($newvalue%2==0){
        return $oldvalue+$newvalue;
    }
    return $oldvalue;
}

$myjog = array_reduce($num,'jogfoll',4);
echo "Jog foll of jor songkha $myjog";