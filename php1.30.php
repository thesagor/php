<?php
//learning array

$students=[
    'ashik',
    'bacchu',
    'cacchu',
    'hayder',
    'nain'
];
$n=count($students);
for($i=$n-1; $i>=0; $i--){
    echo strtoupper($students[$i]). "<br>";
}




