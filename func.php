<?php  
//Array merge()
$vegetable= ['Data', 'shak','pui', 'alu','kaca','sukna moris', 'peyaj'];
$fruits= ['Mango', 'Bedena', 'Kola', 'Jackfruits'];

$part1=array_slice($vegetable,0,3,true);
$part2=array_slice($vegetable,3,null,true);
print_r($part1);
print_r($part2);




$preserved= $part1+ $part2;
print_r($preserved);