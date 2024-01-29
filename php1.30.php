<?php
//learning array
// multi dimentional array

$pusti= explode(', ', 'alu,begun,moric,jol');
$vitaminA= explode(', ', 'lal shak, pepe, am, dhela mas');

$name= explode('+ ', 'rofikul+ rasel+ babu+ sagor');

//print_r($name);


$gusti= [
    'mokter'=>[
        'rofiqul'=>['sijad', 'enti'],
        'rasel'=>['raisa', 'boltu'],
        'babu'=>[' karim', 'biva'],
        'sagor'=>['null']
    ]
] ;

$newvalue= 'bronti bushra';

array_push($gusti['mokter']['rofiqul'], $newvalue);

print_r($gusti['mokter']['rofiqul']);



