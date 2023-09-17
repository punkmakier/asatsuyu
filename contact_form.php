<?php

require_once 'FunctionClass.php';
$func = new FunctionClass;

if(isset($_POST['MessageForm'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cnum = $_POST['cnum'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $travellers = $_POST['travellers'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $airport = $_POST['airport'];
    $budget = $_POST['budget'];
    $ideal = $_POST['ideal'];
    $questions = $_POST['questions'];


    if($func->submitInquiries($fname, $lname, $cnum, $email, $address, $travellers, $adults, $children, $startDate, $endDate, $airport, $budget, $ideal, $questions)){
        echo "Success";
    }
}



?>