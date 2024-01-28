<?php
//learning array

//ARRAY REDUCE

$number= [0,1,2,3,4,5,6,7];

function suma($old,$new){
    if($new%2==0) {
        return $old + $new;
    }
    return $old;
}
$mainsum= array_reduce($number,'suma');
echo $mainsum;



