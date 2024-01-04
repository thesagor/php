<?php
//alternate syntex
$num=200520;
if($num%2==0):
    echo " hey this is Even number";
    echo PHP_EOL. "<br>";
    if($num%400==0 || ($num%4==0 && $num%100 != 0)):
        echo " Hey this is Leap year also";
    else: echo " Hey its not leap year";
    endif;

else:
    echo " hey this is Odd number";
endif;







