<?php
	//simple scope of variable
	
	function sayhello(){
		global $name;
		$name = "John"; //local scope
	}
	sayhello();
	printf("Hello %s\n", $name);