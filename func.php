<?php
	//static scope
	function zoo(){
		static $a;
		$a=$a??=0;
		$a++;
		echo $a;
		echo "\n";
	}

	function koo(){
		static $x;
		$x=$x??=0;
		$x++;
		echo $x;
		echo "\n";
	}
	zoo();
	zoo();
	zoo();
	koo();
	zoo();
	koo();
	koo();
	koo();