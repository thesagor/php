<?php
//learning array
//random number
$numbers= range(10,40);
$random= mt_rand(0,25);
/*//print_r($numbers);

//$n=count($numbers);
//print_r($n);
//print_r($random);*/
if($random%2==1){
    echo "Head";
}else{
    echo "Tail";
}