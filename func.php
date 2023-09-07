<?php  
//Deep copy or copy by value

$names= [
    "name"=>"Sagor Ahmed",
    "occupation"=> "Freelancer",
    "Age"=> 25
];

$data= &$names;

print_r($data);

echo "Shallow copy start from here \n";

//copy by refarence or shallow copy

function DaTa($data){

    $data['name'] = 'Lal Hossain';
    print_r($data);

}
Data($data);


