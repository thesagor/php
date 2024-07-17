<?php
//Assosiative array

$CEO = [
    'name' => "bill gates",
    'age' => 65,
    'mail' => "mail@bill.com",
    'phone' => "015884458"
];
//loop over asssosiative array

foreach ($CEO as $microsoft => $info) {
    echo "$microsoft: $info \n";
}