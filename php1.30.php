<?php
//array rand
$rand=array("a"=>"Dhaka","b"=>"Rajshahi","c"=>"Khulna","d"=>"Barishal","e"=>"Chittagong","f"=>"Sylhet");
$result= array_rand($rand);

echo $rand[$result];