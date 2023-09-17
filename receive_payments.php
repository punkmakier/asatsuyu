<?php

    require 'FunctionClass.php';
    $func = new FunctionClass;

    if(isset($_POST['SubmitPayment'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $cnum = $_POST['cnum'];
        $email = $_POST['email'];
        $address = $_POST['address'];


        $countTravellers = $_POST['countTravellers'];
        $countChildren = $_POST['countChildren'];
        $numPerTravel = $_POST['numPerTravel'];
        $budget = $_POST['budget'];
        $dateStart = $_POST['dateStart'];
        $dateEnd = $_POST['dateEnd'];
        $airport = $_POST['airport'];
        $idealTrip = $_POST['idealTrip'];
        $extraQuestion = $_POST['extraQuestion'];

        $paymentID = $_COOKIE['transaction_id'];

        if($func->addPaymentsDetails($paymentID,$fname,$lname,$cnum,$email,$address,$countTravellers, $countChildren,$numPerTravel,$dateStart,$dateEnd,$airport,$budget,$idealTrip,$extraQuestion)){
            echo "Success";
        }
    }

?>