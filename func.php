<?php  
//vArray slice

$fruits=['Banana', 'kola', 'bedena', 'angur', 'mango'];
$sliceFruits= array_slice($fruits,-3,-1,true);
$sliceFruit= array_slice($fruits,1,3,true);
print_r($sliceFruits);
echo "\n";
print_r($sliceFruit);




