<?php
//multidimentional associative array
$microsoft = [
    'name' => "bill gates",
    'age' => 65,
    'mail' => "mail@bill.com",
    'phone' => "015884458"
];

$tesla = [
    'name' => 'Elon mask',
    'age' => 55,
    'mail' => "mail@mask.com",
    'phone' => "02258744"
];

$facebook = [
    'name' => "juker barg",
    'age' => 45,
    'mail' => 'mail#juk.com',
    'phone' => '01558447'
];

$CEO = [$microsoft, $tesla, $facebook];

print_r($CEO[0]['name']);



