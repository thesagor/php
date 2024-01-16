<?php
include_once "func.php";

function facti($x)
{
    return $x*facti($x-1);
}
echo facti(5);




