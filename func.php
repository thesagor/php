<?php  
//type of sort function

$abol=["Apple", "Bannana","Cadbium","jackfruit","pineapple","abogoda","JADU",'Jadu' ,"ciege"];
$numbers= [12,33,2,234,34,32,1,11,33,22,555,3,4,5];
$knumber= ['a'=>10, 'd'=> 15, 'c'=>12, 'f'=>11];


asort($abol, SORT_STRING|SORT_FLAG_CASE);

foreach($abol as $fruits){
    echo $fruits. "\n";
}



