<?php
//data read
$data = 'C:/Users/User/Desktop/php/inc/students.txt';


$students = array(
    array(
        'name' => 'John Doe',
        'age' => 20,
        'course' => 'BSCS',
        'year' => 3
    ),
    array(
        'name' => 'Jane Adam',
        'age' => 21,
        'course' => 'BSIT',
        'year' => 4
    ),
    array(
        'name' => 'Juan Dela Cruz',
        'age' => 22,
        'course' => 'BSIS',
        'year' => 2
    ),
    array(
        'name' => 'Pedro Penduko',
        'age' => 23,
        'course' => 'BSHRM',
        'year' => 1
    )
);

$handle = fopen($data, 'w');
foreach ($students as $student) {
    //fputcsv($handle, $student);
    fwrite($handle, $student['name'] . ', ' . $student['age'] . ',' . $student['course'] . ',' . $student['year'] . "\n");
}
fclose($handle);












