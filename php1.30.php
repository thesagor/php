<?php
include_once "func.php";



function variable(){
    static $i;
    $i=$i??0;
    $i++;
    echo $i;
    echo "\n";

}
variable();
variable();
variable();





