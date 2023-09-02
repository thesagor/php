<?php
	//assoiative array
	$schools=[
		"class 9"=>"St. Joseph, ideal, biggan, motijheel",
		"class 10"=>"begum badrunnesa, hazrat shah ali mohila, motijheel",
		"class 8"=>"hamdard,high school,taight school, motijheel",
		"university"=> "Du, Ru, Buet, Iut, Nsu, Aiub, Brac, East West,",
		"brack" => "chowbaria,menda,shibpur",
	];

	$schools["brack"]=$schools["brack"]." modhupur,nagdanga";

	echo $schools["brack"];


