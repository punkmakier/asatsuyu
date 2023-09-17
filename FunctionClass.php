<?php
    require_once 'config.php';

    class FunctionClass extends config{


        function addPaymentsDetails ($transaction_id,$first_name,$last_name,$contact_number,$email,$address,$travellers,$children,$adults,$dateStart,$dateEnd,$departing_from,$budget,$ideal_trip,$extra_questions){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO payment_details (transaction_id,first_name,last_name,contact_number,email,address,travellers,children,adults,date_start,date_end,departing_from,budget,ideal_trip,extra_questions) VALUES ('$transaction_id','$first_name','$last_name','$contact_number','$email','$address','$travellers','$children','$adults','$dateStart','$dateEnd','$departing_from','$budget','$ideal_trip','$extra_questions')");
            if($sqlQ->execute()){
                return true;
            }
        }

        function insertOrder($trans_id,$email,$service_id,$title,$price,$quantity,$image){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO orders (transaction_id,email,service_id,title,price,quantity,image) VALUES ('$trans_id','$email','$service_id','$title','$price','$quantity','$image')");
            if($sqlQ->execute()){
                return true;
            }
        }

        function showCountHistoryItem($email){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT count(*) as Counting FROM payment_details WHERE email = '$email'");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    $res = $sqlQ->fetch();
                    return $res['Counting'];
                }
            }
        }

        function showHistoryDetails($email){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM payment_details AS pd INNER JOIN orders AS o ON pd.transaction_id = o.transaction_id WHERE pd.email = '$email' ORDER BY date_created DESC");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    $html = "";
                        while($row = $sqlQ->fetch()){
                        $status = ucwords(strtolower($row['status']));
                        $statusDesign = "";
                        $statusCheck = strtolower($row['status']);
                        if ($statusCheck == "completed") {
                            $statusDesign = "success";
                        } elseif ($statusCheck == "cancelled") {
                            $statusDesign = "danger";
                        } else {
                            $statusDesign = "warning";
                        }


                        $transaction_id = $row['transaction_id'];
                        $date_created = $row['date_created'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $quantity = $row['title'];
                        $image = $row['image'];

                        // Create a DateTime object from the input date string
                        $inputDate = new DateTime($date_created);

                        // Format the DateTime object into the desired output format
                        $outputDateStr = $inputDate->format("F j, Y");
                        
                        $html .= "
                        <div class='alert alert-$statusDesign mb-3'>
                            <div style='display: flex; justify-content:space-between; color: #664d03;'>
                                <h5>Status: $status</h6>
                                Date Created: $outputDateStr
                            </div>
                            <hr>
                            <div class='my_items'>
                                <div class='me-3'><img src='images/$image' alt='' width='150'></div>
                                <div style='color: #664d03;'>
                                    <div class='item_header' style='color: #664d03;'><h2>$title</h2></div>
                                    <h5>Quantity: $quantity</h5><br>
                                    <h6>Price: $ $price</h4>
                                    <span style='color: #664d03;'>Transaction ID: $transaction_id</h4>

                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        ";
                        

                    }

                    echo $html;
                }
            }
        }


        function submitInquiries($fname, $lname, $cnum, $email, $address, $travellers, $adults, $children, $startDate, $endDate, $airport, $budget, $ideal, $questions){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO inquiries (first_name,last_name,contact_number,email,address,travellers,children,adults,start_travel,end_travel,departing_from,budget,ideal,question) VALUES('$fname', '$lname', '$cnum', '$email', '$address', '$travellers', '$adults', '$children', '$startDate', '$endDate', '$airport', '$budget', '$ideal', '$questions')");
            if($sqlQ->execute()){
                return true;
            }
        }



        function submitSubscribe($email){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("INSERT INTO subscribers (email) VALUES('$email')");
            if($sqlQ->execute()){
                return true;
            }
        }
    }

    





?>