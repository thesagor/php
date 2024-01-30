<?php
//learning array
//shallow copy and deep copy

$number=[
    'a'=>100,
    'b'=>500,
    'z'=>250,
    'd'=>300,
    'e'=>350
];
$case=[
    'a'=>'hellow',
    'c'=>'Hai',
    'b'=>'world'
];
asort($case, SORT_STRING | SORT_FLAG_CASE);
asort($number);
print_r($case);
print_r($number);




