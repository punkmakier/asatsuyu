<?php
    require_once 'FunctionsController.php';
    $func = new FunctionsController;



    if(isset($_POST['Action']) && $_POST['Action'] == "loginData"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($func->isAuthenticated($username,$password)){
            setcookie("username",$username);
            echo "Success";
        }
    }


    if(isset($_POST['Action']) && $_POST['Action'] == "updateStatus"){
        $status = $_POST['status'];
        $id = $_POST['transid'];
        if($func->updatingStatus($id,$status)){
            echo "Success";
        }
    }
    if(isset($_POST['Action']) && $_POST['Action'] == "ShowDetails"){
        $id = $_POST['id'];
        echo json_encode($func->showCompleteInquiryDetails($id));
    }
    



?>