<?php

//creating a celcius to ferrenhait converter using printf
//The formula to convert Celsius to Fahrenheit is given by: °F = °C × (9/5) + 32

$celcius = 40;
$farrenhait = $celcius * (9 / 5) + 32;
printf("converting celcius %.2f°C to Farenhait: %.2ff", $celcius, $farrenhait);

?>