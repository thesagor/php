<?php
// Awitch case using iin this class

$n= 11;
$p= $n%2;

switch ($p){
    case 0:
        echo " This is even number to check";
        break;
    default :
    echo "This is odd number \n";

}

$zone= 'noyakhali';

switch ($zone){
    case 'pabna':
        echo " This is pabna and healthy weather are satisfied";
        break;
    case 'raj':
        echo " Seirom sit to hear but healthy to live";
        break;
    case 'chit':
        echo "This is chatgaiya";
        break;
    case 'Dhaka':
        echo "This is capital of bangladesh";
        break;
    case 'lokkhipur':
    case 'noyakhali':
        echo strtoupper ('Sob salarai noyakhali');
        break;
}




