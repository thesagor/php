<?php
$n=143;

if($n%2==0):
    echo " This is even number";
    echo PHP_EOL;
    echo " I like the even number";
else: 
    echo " This is ODD number";
    echo PHP_EOL;
    echo " I dont like the odd number";
    echo PHP_EOL;
endif;
?>
<h1> This is heading to show in the PHP code </h1>

<?php
    switch($n%2):
        case 0 :
            echo " This is even number by Switch case";
            break;
        default:
        echo " This is ODD number by switch case";
        break;
        endswitch;