<?php
	//Reduce array to a single value by using a callback function
	$mynum=[1,2,3,4,5,6,7,8,9,10];
	function sum($oldvalue=0,$newvalue){
		return $oldvalue+$newvalue;
	}

	$output= array_reduce($mynum,"sum");
	echo $output;

	


