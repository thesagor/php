<?php
$ami= 'sagor ahmed';
$friend= 'Sarif sharkar';
$jala= "jalal shah";
#echo "Amr name is {$ami}. My friend name is {$friend}. another friend is {$jala}";
define('SCHOOL', 'Ideal school');
//echo "{$ami} and {$friend} read in the ". SCHOOL . "{$jala} read n high school";
$constant = 'constant';
echo " {$ami} and {$friend} read in the {$constant('SCHOOL')}. {$jala} read in hogh school";