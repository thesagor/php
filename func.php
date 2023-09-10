<?php  
//Array merge()
$vegetable= ['Data', 'shak','pui', 'alu','kaca','sukna moris', 'peyaj'];
$fruits= ['Mango', 'Bedena', 'Kola', 'Jackfruits'];

$part1=array_slice($vegetable,0,3,true);
$part2=array_slice($vegetable,3,null,true);
$part3= array("k"=>"vutto", "j"=>"nutt");

$merged= $part2+$part3;
print_r($merged);




$preserved= $part1+ $part2;
//print_r($preserved);