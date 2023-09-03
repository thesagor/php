<?php
	//Reduce array to a single value by using a callback function
	$mynum=[1,2,3,4,5,6,7,8,9,10];
	function sum($oldvalue=0,$newvalue){
		if($newvalue%2==0){
			return $oldvalue+$newvalue;

		}
		return $oldvalue;
	}

	$output= array_reduce($mynum, "sum");
	echo $output;

	


