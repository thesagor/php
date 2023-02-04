<?php
// Swirch case diye even odd negetive and possitive checking

$n= -21;
$r= $n%2;

switch($r){
    case 0: switch($n){
        case ($n>0): 
            echo " This is possitive even number";
            break;

        case ($n<0):
            echo "This is negetive even number";
            break;
    }

        default:switch($n){
            case ($n>0): 
                echo " This is possitive odd numner";
                break;

            case ($n<0):
                echo "This is negetive odd number";
                break;
        }
}





