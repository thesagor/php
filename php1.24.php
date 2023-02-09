<?php
//print 10 to 0
$num=10;
for($i=$num,$factorial=1;$i>0;$i--){
    $factorial*=$i;
}
printf("This is the number %d and factorial is %d", $num,$factorial);

