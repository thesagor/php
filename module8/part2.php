<?php


/*

// Constrcutor & its parameter 

1. constructor itself a function *
2. auto executed function *
3. constructor function can take param *
4. constructor can't return *
*/

class math
{
    public $num1 = 40;
    public $num2 = 50;
    public function __construct($one = 20, $two = 50)
    {
        echo $one + $two;
    }
}
new math();
