<?php

// learning continue abd break operator


for($i=10; $i<=20;$i++){
   echo $i;
   echo PHP_EOL;

   if($i%15==0){
      break;
   }
}
echo  "============". PHP_EOL;

for( $i=10; $i<=30; $i++){
   if($i%2==0){
      continue;
   }
   echo $i;
   echo PHP_EOL;
}