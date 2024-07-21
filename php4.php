<?php
//string related issue

$string = "I'm Sagor ahmed, we are lorem30 and try to work from home.Butt we have not  any internet connection";

$lenth = strlen($string);

$wordexplode = explode(" ", $string);
$wcount = count($wordexplode);
echo $wcount . "\n ";
$charge = ($wcount - 5) * 5;
echo $charge;

$charged = $charge / 5;
echo PHP_EOL;
echo $charged;