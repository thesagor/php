<?php
$n=5;
for($i=$n, $fact=1; $i>1; $i--){
   $fact*= $i;
}
printf("Tis is %d is %d", $n, $fact);