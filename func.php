<?php  
//value set or not set or not empty

$number='sorhe bekaya';

if(isset($number) && is_numeric($number) || !empty($number)){
    echo "Not empty or numeric wchich is $number";
}else{
    echo "Not set";
}




