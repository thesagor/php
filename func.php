<?php  
//Deep copy or copy by value

$names= [
    "name"=>"Sagor Ahmed",
    "occupation"=> "Freelancer",
    "Age"=> 25
];

unset($names['name']);
print_r($names);
print_r( array_keys($names));


