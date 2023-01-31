<?php
// Leap year checking method
$year= 2016;
if($year%4==0 && ($year%100 !=0 || $year%400==0) ){
    echo "{$year} IS Leap Year";}
    else{
        echo "$year Is not leap year";
    }