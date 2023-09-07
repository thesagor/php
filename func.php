<?php  
//Deep copy or copy by value

$names= [
    "name"=>"Sagor Ahmed",
    "occupation"=> "Freelancer",
    "Age"=> 25
];

$data= &$names;


function inData($data){

    $data['name']= 'Sagor hoosain';
    print_r($data);

}


print_r($names);
inData($names);



