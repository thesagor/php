<?php
//finding the biggest number among 3 numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;
if ($num1 > $num2 && $num1 > $num3) {
    echo "The biggest number is $num1";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "The biggest number is $num2";
} elseif ($num3 > $num1 && $num3 > $num2) {
    echo "The biggest number is $num3";
} else {
    echo "The number is invalid";
}


