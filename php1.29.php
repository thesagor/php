<?php

// Fibionacci series practice
// Generate the first 10 terms of the Fibonacci series

$term1=0;
$term2=1;
echo $term1." ". $term2." ";
for($i=0;$i<=10;$i++){
   $term3= $term1+$term2;
   echo $term3. " ";
   $term1=$term2;
   $term2=$term3;
}

