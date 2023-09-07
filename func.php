<?php  
//Deep copy or copy by value

$names= [
    "name"=>"Sagor Ahmed",
    "occupation"=> "Freelancer",
    "Age"=> 25
];

$lal= $names;
$lal['name']='lal hossain';

print_r($lal);

