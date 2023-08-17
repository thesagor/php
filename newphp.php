//task of darun it
<?php
$student=00;
    $marks=$student;

    if($marks>=0 && $marks<=32){
        echo "Sala fail korese. Mor";
    }
    elseif($marks>=33 && $marks<=39){
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
        echo " Invalid number";
    }

//switch case added

$marks=00;
switch ($marks) {
    case ($marks>=0 && $marks<=32):
        echo "This is fail";
        break;
        
        case ($marks>=32 && $marks<=39):
        echo "This is grade Pass Number";
        break;
    
        
        case ($marks>=39 && $marks<=49):
        echo "This is grade D";
        break;
    
        
        case ($marks>=49 && $marks<=59):
        echo "This is Grade C";
        break;
    
        
        case ($marks>=59 && $marks<=69):
        echo "This is Grade B";
        break;
    
        
        case ($marks>=69 && $marks<=79):
        echo "This is Grade A";
        break;
    
        
        case ($marks>=79 && $marks<=100):
        echo "This is A++";
        break;
    
    default:
        echo " This is invalid number";
        break;
}