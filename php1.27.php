<?php

  //while loop and ++ operator
   $i=0;
   while($i<5){
      echo $i;
      echo PHP_EOL;
      $i++;
   }

   echo "===========\n";

   $j=0;
   while($j++ <5){
      echo $j;
      echo PHP_EOL;
   }

   echo "===========\n";

   $n=0;
   while(++$n <5){
      echo $n;
      echo PHP_EOL;
   }

   $x=$y=5;
   $x=$y++;
   echo "x is $x and y is $y";