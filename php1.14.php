<?php
// Leap year checking method
$con1= true;
$con2= false;
$con3 = false;
if ($con1 && $con2 && $con3) {
    echo " 3tai sotto" ;
}elseif ($con1 && $con2) {
    echo " Nah re vai 2ta sotto ekta con3 not checking";
}elseif($con1 && $con3){
    echo " Vai re vai con 1 con 3 sotto con2 not checking";
}elseif($con1){
    echo " con1 is true to read and write";
}elseif($con1 || $con2 || $con3){
    echo " j vai l=khali 1ta sotto baki sob sob mittha";
}else{ echo " Sob mittha";}

                                                                 