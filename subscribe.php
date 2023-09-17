<?php

require_once 'FunctionClass.php';
$func = new FunctionClass;

if(isset($_POST['Subscribe'])){
    $typeemail = $_POST['typeemail'];

    if($func->submitSubscribe($typeemail)){
        echo "Success";
    }
}



?>