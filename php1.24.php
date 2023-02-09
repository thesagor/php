<?php
//print 10 to 0
$n=6;
for($i=$n, $factorial=1; $i>1;$i--){
    $factorial= ($factorial*$i);
}
echo $factorial;