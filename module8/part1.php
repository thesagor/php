<?php

$person1 = [
    'name' => 'sagor',
    'age' => 25,
    'mail' => 'nilsagor004@gmail.com'
];
$person2 = [
    'name' => 'asad',
    'age' => 25,
    'mail' => 'kalim@y.com'
];
$person3 = [
    'name' => 'kamal Hossain',
    'age' => 25,
    'mail' => 'x@gma.com'
];

$allPerson = [$person1, $person2, $person3];
foreach ($allPerson as $persons => $details) {
    foreach ($details as $persongula => $bistarito) {
        echo "$persongula => $bistarito";
        echo "<br>";
    }
    echo PHP_EOL;
    echo "<br>";
}
print_r($allPerson[2]['name']);


