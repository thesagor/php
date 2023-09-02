<?php
	//assoiative array
	$schools=[
		"class 9"=>"St. Joseph, ideal, biggan, motijheel",
		"class 10"=>"begum badrunnesa, hazrat shah ali mohila, motijheel",
		"class 8"=>"hamdard,high school,taight school, motijheel",
		"university"=> "Du, Ru, Buet, Iut, Nsu, Aiub, Brac, East West,"
	];

	// foreach ($schools as $vlo => $value) {
		
	// 	echo $vlo.": ".$value."\n";
		
	// }

	$value=array_values($schools);
	for($i=0;$i<=count($value);$i++){
		echo $value[$i];
		echo "\n";
	}
