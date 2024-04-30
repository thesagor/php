<?php
//learning array
//random number
$number= range(40,80);
shuffle($number);
$rand= $number[5];

if($rand%2== 0){
    echo "Head";
}else{
    echo "Tail";
}
//testing


