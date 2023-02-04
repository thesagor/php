<?php
// Swirch case diye even odd negetive and possitive checking

$n= 24;
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
    break;

        default:switch($n){
            case ($n>0): 
                echo " This is possitive odd numner";
                break;

            case ($n<0):
                echo "This is negetive odd number";
                break;
        }
        break;
}

echo "\n";

switch (true){
    case (0 == $r && $n>0):
            echo " This is possitive and even number";
            break;
    case(1==$r && $n>0):
            echo " This is ODDy and Possitive Number";
            break;
    case(0==$r && $n<0):
            echo " This is Even number but Negtive";
            break;
        
    case(-1 ==$r && $n<0):
            echo "This is ODD number but negetive";
            break;
        
    }




