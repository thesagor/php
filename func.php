<?php
	//Array
	$students=['john','jane','doe','james','judy'];
	//echo $students[0];

	// var_dump($students);
	// echo count($students);

	$number= count($students);

	for($i=0; $i<=$number;$i++){

		echo $students[$i]."\n";

	}

	echo "\n";

	for($i=$number-1; $i>=0;$i--){

		echo $students[$i]."\n";

	}
