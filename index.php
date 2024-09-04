<?php

abstract class  abba
{
    public $taka = 50000;
    public $jomi = 10000;

    function abbarsompotti()
    {
        for ($i = 1; $i <= 10; $i++) {
            print ($i . "\n");
        }

    }
}

class son extends abba
{
    public function abbarsompotti()
    {
        for ($i = 1; $i <= 5; $i++) {
            print ($i . "\n");
        }

    }

}

$sons = new son();
$sons->abbarsompotti();