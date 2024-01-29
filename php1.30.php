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



$exmple= [
    'name'=>'Sagor Ahmed',
    'age'=> 23,
    'class'=>9,
    'home'=>'Bhangura',
    'roll'=>10
];

$convert= serialize($exmple);
print_r($convert);
echo PHP_EOL;
$convertdecode= unserialize($convert);
print_r($convertdecode);


