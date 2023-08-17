//task of darun it
<?php
$student=52;
    $marks=$student;

    if($marks==33 && $marks<=39){
        echo " The result is Grade Pass";
    }elseif($marks>=39 && $marks<=49){
        echo " The result is Grade D";
    }elseif($marks>=49 && $marks<=59){
        echo " The result is Grade C";
    }elseif($marks>=59 && $marks<=69){
        echo " The result is Grade B";
    }elseif($marks>=69 && $marks<=79){
        echo " The result is Grade A";
    }elseif($marks>=79 && $marks<=100){
        echo " The result is Grade A+";
    }else{
        echo " Sala fail korese. Mor";
    }
