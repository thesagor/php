<?php

final class  abba
{
    function __construct()
    {
        for ($i = 1; $i <= 10; $i++) {
            print($i . "\n");
        }
    }
}

class son extends abba
{
    /*function __construct()
    {
        parent::__construct();
        for ($i = 1; $i <= 8; $i++) {
            print ($i . "\n");
        }
    }*/
}

$sons = new son();

function sitetrax($id, $num)
{
    echo $id . " " . $num;
    printf("The id is %d and the num is %d", $id, $num);
}
