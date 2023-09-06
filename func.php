<?php  
//Array convert into json and serialize

$student=[
    'fname'=> 'jamal',
    'lname'=> 'vuia',
    'class'=> 9,
    'group'=> 'science',
    'gender' => 'men'
];

//print_r($student);

//printf( "This is %s %s",$student['fname'], $student['lname']);
//$serialized= serialize($student);
//$uns= unserialize($serialized);
//print_r($uns);

$json= json_encode($student);
$dejson= json_decode($json,true);
//print_r($dejson);
foreach ($dejson as $key => $value) {
    echo $key. " = ". $value. "\n";
}



