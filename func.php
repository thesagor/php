<?php

function fact($n){
    for ($i=$n,$fact=1; $i >1 ; $i--) { 
        $fact=$fact*$i;     
    }     
    return $fact; 
}