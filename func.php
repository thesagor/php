<?php  
//Array merge()
$vegetable= ['Data', 'shak','pui', 'alu'];
$fruits= ['Mango', 'Bedena', 'Kola', 'Jackfruits'];

$part1=array_splice($vegetable,0,2);
print_r($part1);
print_r($vegetable);
echo "\n";
$mergedData= array_merge($part1, $vegetable);
print_r($mergedData);






