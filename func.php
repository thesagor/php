<?php
function checked($inputName, $value){
    if (in_array($value,$_REQUEST[$inputName])){
        echo "checked";
    }
}


?>