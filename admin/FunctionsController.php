

<?php
    require_once '../config.php';

    class FunctionsController extends config{


        public function isAuthenticated($username, $password){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM user WHERE username='$username' AND password='$password' ");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    return true;
                }
            }
        }


        public function showUsername($username){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM user WHERE username='$username' ");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    $res = $sqlQ->fetch();
                    echo $res['username'];
                }
            }
        }

        function showPaymentDetails(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT COUNT(o.`transaction_id`) AS COUNTING, o.transaction_id, p.email, p.status, SUM(`price` * `quantity`) AS Total FROM `orders` AS o INNER JOIN payment_details AS p ON o.transaction_id = p.transaction_id GROUP BY o.transaction_id");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    $html = "";
                    while($row = $sqlQ->fetch()){
                        $transid = $row['transaction_id'];
                        $email = $row['email'];
                        $status = $row['status'];
                        $remove = "";
                        if($status == "completed"){
                            $style="success";
                            $remove = "display: none !important;";
                        }elseif($status == "cancelled"){
                            $style="danger";
                            $remove = "display: none !important;";
                        }else{
                            $style="warning";
                        }
                        $Total = $row['Total'];

                            $sqlQ1 = $con->prepare("SELECT * FROM payment_details AS pd INNER JOIN orders AS o ON pd.transaction_id = o.transaction_id WHERE pd.transaction_id = '$transid'");
                            if($sqlQ1->execute()){
                                $html .= "<tr><td>$transid</td>
                                <td>
                                ";

                                while($res = $sqlQ1->fetch()){

                                    $title = $res['title'];
                                    $price = $res['price'];
                                    $quantity = $res['quantity'];
                                    
                                    $html .="
                                                
                                                
                                                    <h6>Name: $title</h6>
                                                    <h6>Price: $price</h6>
                                                    <h6>Quantity: $quantity</h6>
                                                    <hr>
                                                
                                                ";
                                            
                                }
                                $html.="</td>
                                <td>$email</td>
                                <td> <span class='badge bg-$style'>$status</span></td>
                                <td>$$Total</td>
                                <td>
                                    <div class='dropdown' style='$remove'>
                                        <a class='btn btn-secondary dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                        -
                                        </a>
                                    
                                        <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='javascript:void(0)' onclick=updateStatus('pending','$transid')>Pending</a></li>
                                        <li ><a class='dropdown-item' href='javascript:void(0)' onclick=updateStatus('cancelled','$transid')>Cancelled</a></li>
                                        <li><a class='dropdown-item' href='javascript:void(0)' onclick=updateStatus('completed','$transid')>Completed</a></li>
                                        </ul>
                                    </div>
                                </td>

                                
                                </tr>";
                            }

                        
                    }
                }

                echo $html;

            }
        }



        function updatingStatus($id, $status){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE payment_details SET status='$status' WHERE transaction_id='$id'");
            if($sqlQ->execute()){
                return true;
            }
        }


        function showInquiries(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM inquiries");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        $completename = $row['first_name']." ".$row['last_name'];
                        $contact_number = $row['contact_number'];
                        $id = $row['id'];
                        $email = $row['email'];
                        $budget = $row['budget'];
                        $date_created = $row['date_created'];
                        // Create a DateTime object from the input date string
                        $inputDate = new DateTime($date_created);

                        // Format the DateTime object into the desired output format
                        $outputDateStr = $inputDate->format("M. j, Y");
                        echo "
                            <tr>
                                <td>$completename</td>
                                <td>$contact_number</td>
                                <td>$email</td>
                                <td>$budget</td>
                                <td>$outputDateStr</td>
                                <td>
                                    <a href='javascript:void(0);' onclick=showDetails('$id') >Show Details</a>
                                </td>
                            </tr>
                        
                        ";
                    }
                }
            }
        }


        function showCompleteInquiryDetails($id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM inquiries WHERE id = $id");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    $itemList = array();
                    while($row = $sqlQ->fetch()){
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $contact_number = $row['contact_number'];
                        $email = $row['email'];
                        $address = $row['address'];
                        $travellers = $row['travellers'];
                        $children = $row['children'];
                        $adults = $row['adults'];
                        $start_travel = $row['start_travel'];
                        $end_travel = $row['end_travel'];
                        $departing_from = $row['departing_from'];
                        $budget = $row['budget'];
                        $ideal = $row['ideal'];
                        $question = $row['question'];

                        $itemList = array(
                            "first_name" => $first_name,
                            "last_name" => $last_name,
                            "contact_number" => $contact_number,
                            "email" => $email,
                            "address" => $address,
                            "travellers" => $travellers,
                            "children" => $children,
                            "adults" => $adults,
                            "start_travel" => $start_travel,
                            "end_travel" => $end_travel,
                            "departing_from" => $departing_from,
                            "budget" => $budget,
                            "ideal" => $ideal,
                            "question" => $question
                        );

                    }

                    return $itemList;
                }
            }
        }



        function showEmailNewsLetter(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT email FROM subscribers");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($res = $sqlQ->fetch()){
                        $email = $res['email'];
                        echo "
                            <tr>
                                <td>$email</td>
                            </tr>
                        ";
                    }
                }
            }
        }

        function showEmailNewsLetterLIST(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT email FROM subscribers");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    $listItem = array();
                    while($res = $sqlQ->fetch()){
                        $email = $res['email'];
                        array_push($listItem,$email);
                    }
                }

                return $listItem;
            }
        }
    }


?>