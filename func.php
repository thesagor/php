<?php

function fruitsChecked( $value){
    if(!empty($_REQUEST['fruits']) && is_array( $_REQUEST['fruits']) && in_array($value,$_POST['fruits'])){
        echo "checked";
    }

}
?>