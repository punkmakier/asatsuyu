<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Asatsuyu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        *{
            color: #fff;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }



        header{
            width: 100%;
            top: 0;
            z-index: 3;
            text-align: center;
            position: fixed !important;
            transition: 0.3s ease;
        }
        header nav{
            width: 60%;
            position: relative !important;
            top: 0;
            margin: 0 auto;
            padding: 40px;
            /* border-top: 1px solid #fff; */
            border-top: 1px solid rgba(255, 255, 255, 0.489);
            border-bottom: 1px solid rgba(255, 255, 255, 0.489);
        }
        .sticky{
            background-color: #191919;
        }

        header nav a{
            padding: 20px;
            color: #fff;
            text-decoration: none;
            transition: .2s ease;
        }
        header nav a:hover{
            color: #64A705;
        }
        .header-content{
            width: 100%;
            height: 40vh;
            background-color: #191919;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 105px ;
            background: url("images/bgimage2.webp");
            overflow: hidden;
            position: relative;
        }
        .header-content .overlay{
            background-color: rgba(0,0,0,0.8);
            position: absolute;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 1;

        }
        .header-content h1{
            color: #64A705;
        }
        .header-content p{
            width: 60%;
            text-align: center;
            margin-top: 30px;
            line-height: 2.5rem;
        }


        .custombtn{
            background-color: #64A705;
            border-radius: 3px;
        }
        .custombtn:hover{
            background-color: #518706;
        }
        
    footer{
        width: 60%;
        margin: 0 auto;
        margin-top: 90px;
        text-align: center;
    }
    footer ul{
        list-style: none;
        margin-top: -20px;
        margin-left: -30px;
        margin-bottom: 30px;
    }
    footer li{
        display: inline-block;
        margin: 10px 25px;
    }
    footer li a{
        font-size: 1.8rem;
    }

    footer nav a{
        text-decoration: none;
        margin: 10px 40px;
        color: #fff;
        transition: .2s ease;
    }
    footer .newsletter{
        width: 40%;
        margin: 0 auto;
        margin-top: 50px;
    }
    footer nav a:hover{
        color: #64A705;
    }
    footer h2{
            color: #518706;
        }
        footer h5{
            color: #ffffff;
            letter-spacing: 3px;
            margin-top: 20px;
        }

@media(max-width: 1100px){

}
@media(max-width: 900px){
    .cancel{
        top: -10% !important;
    }
}

.my_items{
    border-bottom: 1px solid #fff;
    padding: 10px;
    margin-bottom: 60px;
    position: relative;
    display: flex;
    cursor: pointer;
    transition: .2s ease;
}
.my_items:hover{
    background-color: #888;
}
.my_items i{
    font-size: 2rem;
    cursor: pointer;
}
.cancel{
    position: absolute;
    right: 1%;
    top: 5%;
    z-index: 2;
}


.container mt-5 .row{
	display: flex;
	justify-content: space-between;
	width: 100%;
	max-width: 1100px;
}
.row section.col{
	display: flex;
	flex-direction: column;
}
.row section.left{
	flex-basis: 35%;
	min-width: 320px;
	margin-right: 60px;
}
.row section.right{
	flex-basis: 60%;
}
section.left .contactTitle h2{
	position: relative;
	font-size: 28px;
	color: #ddd;
	display: inline-block;
	margin-bottom: 25px;
}
section.left .contactTitle h2::before{
	content: '';
	position: absolute;
	width: 50%;
	height: 1px;
	background-color: #888;
	top: 120%;
	left: 0;
}
section.left .contactTitle h2::after{
	content: '';
	position: absolute;
	width: 25%;
	height: 3px;
	background-color: #518706;
	top: calc(120% - 1px);
	left: 0;
}
section.left .contactTitle p{
	font-size: 17px;
	color: #ccc;
	letter-spacing: 1px;
	line-height: 1.2;
	padding-bottom: 22px;
}
section.left .contactInfo{
	margin-bottom: 16px;
}
.contactInfo .iconGroup{
	display: flex;
	align-items: center;
	margin: 25px 0px;
}
.iconGroup .icon{
	width: 45px;
	height: 45px;
	border: 2px solid #518706;
	border-radius: 50%;
	margin-right: 20px;
	position: relative;
}
.iconGroup .icon i{
	font-size: 20px;
	color: #ddd;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.iconGroup .details span{
	display: block;
	color: #888;
	font-size: 18px;
}
.iconGroup .details span:nth-child(1){
	text-transform: lowercase;
	color: #ccc;
}
section.left .socialMedia{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	flex-wrap: wrap;
	margin: 22px 0px 20px;
}
.socialMedia a{
	width: 35px;
	height: 35px;
	text-decoration: none;
	text-align: center;
	margin-right: 15px;
	border-radius: 5px;
	background-color: #518706;
	transition: 0.4s;
}
.socialMedia a i{
	color: #ddd;
	font-size: 18px;
	line-height: 35px;
	border: 1px solid transparent;
	transition-delay: 0.4s;
}
.socialMedia a:hover{
	transform: translateY(-5px);
	background-color: #2e2e2e;
	color: #518706;
	border: 1px solid #518706;
}
.socialMedia a:hover i{
	color: #518706;
}


/* Code for the right section (column) */
/* For webkit-based browsers (Chrome, Safari) */


.row section.right .messageForm{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	padding-top: 30px;
}
.row section.right .inputGroup{
	margin: 18px 0px;
	position: relative;
    margin-top: 40px;
}
.messageForm .halfWidth{
	flex-basis: 48%;
}
.messageForm .threefourth{
	flex-basis: 32%;
}
.messageForm .fullWidth{
	flex-basis: 100%;
}


.messageForm input[type="text"],.messageForm input[type="number"],.messageForm input[type="date"], .messageForm textarea{
	width: 100%;
	font-size: 18px;
	padding: 2px 0px;
	background-color: #000000;
	color: #ddd;
	border: none;
	border-bottom: 2px solid #666;
	outline: none;
}
.messageForm textarea{
	resize: none;
	height: 100px;
	display: block;
}
textarea::-webkit-scrollbar{
	width: 5px;
}
textarea::-webkit-scrollbar-track{
	background-color: #1e1e1e;
	border-radius: 15px;
}
textarea::-webkit-scrollbar-thumb{
	background-color: #518706;
	border-radius: 15px;
}
.inputGroup label{
	position: absolute;
	left: 0;
	bottom: 4px;
	color: #888;
	font-size: 18px;
	transition: 0.4s;
	pointer-events: none;
}
.inputGroup:nth-child(4) label{
	top: 2px;
}
.inputGroup input:focus ~ label, .inputGroup textarea:focus ~ label,
.inputGroup input:valid ~ label, .inputGroup textarea:valid ~ label
{
	transform: translateY(-30px);
	font-size: 16px;
}
.inputGroup button{
	padding: 8px 16px;
	font-size: 18px;
	background-color: #518706;
	color: #ddd;
	border: 1px solid transparent;
	border-radius: 25px;
	outline: none;
	cursor: pointer;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
	transition: 0.4s;
}
.inputGroup button:hover{
	background-color: #2e2e2e;
	color: #518706;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
	border: 1px solid #518706;
}
@media(max-width: 1100px){
	.messageForm .halfWidth{
		flex-basis: 100%;
	}
}
@media(max-width: 900px){
	.container mt-5 .row{
		flex-wrap: wrap;
	}
	.row section.left, .row section.right{
		flex-basis: 100%;
		margin: 0px;
	}
    .customDate{
        width: 100% !important;

    }
    #checkoutId{
        width: 100% !important;
    }
    .halfWidth{
        margin-bottom: 40px !important;
    }
}

.customDate{
    position: relative;
}

.customDate .fa-calendar{
    position: absolute;
    right: 2%;
    z-index: 1;
    top: 55%;
}
.customSelect{
    width: 100%;
    background-color: #000000;
    padding: 10px;
}

.next, .checkout{
    background-color: #000000;
    border: 1px solid #518706;
    padding: 8px 30px;
    width: 30%;
    transition: .3s ease;
    letter-spacing: 2px;
}
.next:hover, .checkout:hover{
    background-color: #518706;
}
    </style>
</head>




    <body style="background-color: #000000;">
          
        <div style="overflow: hidden;">
            <?php include 'header.php'; ?>
            <div class="header-content">
                <h1 style="z-index: 2;">My Cart</h1>
                <div class="overlay"></div>
            </div>
            <br><br><br><br>
            <div >
                <div class="container" id="myCart"></div>
                <div class="container text-center" id="empty"><h1>EMPTY</h1></div>
                <div class="container" id="totalItem"></div>
            </div>

            <div class="row p-5" style="display: none;" id="checkoutPanel">
                <div class="col">
                    <h5>Payment for:</h5><br>
                    <div class="container-fluid" id="myCartList"></div>
                    <div id="totalItemCheckout"></div>
                </div>


                <div class="col-sm-7 me-5">
                    <div class="container-fluid text-center" id="checkoutId">

                    <form class="messageForm" id="detailsForm">
                        <div class="yourDetails">
                            <h5 class="text-start">Your Details</h5><br><br>

                            <div class="row">
                                <div class="col-sm mb-5">
                                    <div class="inputGroup halfWidth" style="position: relative;">
                                        <input type="text" name="fname" id="fname" required="required">
                                        <label>First Name <span style="color: red;">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm mb-5">
                                    <div class="inputGroup halfWidth" style="position: relative;">
                                        <input type="text" name="lname" id="lname" required="required">
                                        <label>Last Name <span style="color: red;">*</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm mb-5">
                                    <div class="inputGroup halfWidth" style="position: relative;">
                                        <input type="text" name="cnum" id="cnum" required="required">
                                        <label>Contact Number <span style="color: red;">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm mb-5">
                                    <div class="inputGroup halfWidth" style="position: relative;">
                                        <input type="text" name="email" id="email" required="required">
                                        <label>Email <span style="color: red;">*</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm mb-5">
                                    <div class="inputGroup halfWidth" style="position: relative;">
                                        <input type="text" name="address" id="address" required="required">
                                        <label>Address <span style="color: red;">*</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="yourTrip" style="display: none;">
                        <h5 class="text-start">Your Trip</h5><br><br>
                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="inputGroup halfWidth" style="position: relative;">
                                    <input type="number" name="countTravellers" id="countTravellers" required="required">
                                    <label>How many travellers? <span style="color: red;">*</span></label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="inputGroup halfWidth" style="position: relative;">
                                    <input type="number" name="countChildren" id="countChildren" required="required">
                                    <label>Children: <small>age 0-12</small> <span style="color: red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm mb-5">
                                <div class="inputGroup halfWidth" style="position: relative;">
                                    <input type="number" name="numPerTravel" id="numPerTravel" required="required">
                                    <label>No. of persons travelling: <small>Adults(age 12+)</small> <span style="color: red;">*</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="mb-3 mt-3 customDate" style="position: relative;text-align: start !important;">
                                    <label for="exampleInputEmail1" class="form-label text-start" style="color: #888;">Start Travel <small>(Estimated)</small> <span style="color: red;">*</span></label>
                                    <input type="date" name="dateStart" id="dateStart">
                                    <i class="fa-solid fa-calendar"></i>
                                </div>

                            </div>
                            <div class="col-sm mb-5">
                                <div class="mb-3 mt-3 customDate" style="position: relative; text-align: start !important;">
                                    <label for="exampleInputEmail1" class="form-label text-start" style="color: #888;">End Travel <small>(Estimated)</small> <span style="color: red;">*</span></label>
                                    <input type="date" name="dateEnd"  id="dateEnd">
                                    <i class="fa-solid fa-calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="inputGroup halfWidth" style="position: relative; text-align: start;">
                                    <input type="text" name="airport" id="airport" required="required">
                                    <label>What is the city/airport that you will be departing from? <span style="color: red;">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start mb-5">
                            <label for="exampleInputEmail1" class="form-label" style="color: #888; text-align: start !important;">Budget for accomodation per room, per night? <span style="color: red;">*</span></label>
                                <select name="budget" id="budget" class="customSelect">
                                    <option value="">-Select-</option>
                                    <option value="$500 - $1000">$500 - $1000</option>
                                    <option value="$1000 - $1500">$1000 - $1500</option>
                                    <option value="$1500 - $2000">$1500 - $2000</option>
                                    <option value="$2000+">$2000+</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="inputGroup halfWidth" style="position: relative; text-align: start;">
                                    <input type="text" name="idealTrip" id="idealTrip" required="required">
                                    <label>Tell us about your ideal trip. <small style="color: #888;">(e.g: Interest, Activities, Foods, Special Occasion and etc.)</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="inputGroup halfWidth" style="position: relative; text-align: start;">
                                    <input type="text" name="extraQuestion" id="extraQuestion" required="required">
                                    <label>Any extra info or questions? <small style="color: #888;">(We're here to make your experience better!)</small></label>
                                </div>
                            </div>
                        </div>
                        <div id="paypal-button-container"></div>
                    </div>
                    

                        <button type="button" class="next">Next</button>
                    </form>
                </div>
                </div>
            </div>
            
        </div>



            <br><br><br><br><br><br><br><br><br>
            <?php include 'footer.php'; ?>


            <script src="https://www.paypal.com/sdk/js?client-id=AW4TG0a3FP3KJ011NSQIwTiDmcpQa_V9SB3IN8jBV6mg8wcNKjWK83eyg8pkMrQPVWu5HDq1-tdTXvXJ&currency=USD"></script>


        <script>
            let jsonArray = localStorage.getItem('myCart');
            console.log(localStorage.getItem("myCart"))
            // Parse the JSON string back to an array
            var TotalAmountItem = 0;
            var storedArray = JSON.parse(jsonArray);
            for(var i=0; i < storedArray.length; i++){
                $("#myCart").append('<div class="my_items"><div class="cancel" id="'+storedArray[i].id+'"><i class="fa-solid fa-rectangle-xmark text-danger"></i></div><div class="me-3"><img src="images/'+storedArray[i].image+'" alt="" width="130"></div><div><div class="item_header"><h2>'+storedArray[i].name+'</h2><h5>Quantity: '+storedArray[i].quantity+'</h5>Price: $ '+storedArray[i].price+'</div></div></div>')
                $("#myCartList").append('<div class="my_items"><div class="me-3"><img src="images/'+storedArray[i].image+'" alt="" width="130"></div><div><div class="item_header"><h2>'+storedArray[i].name+'</h2><h4>Price: $ '+storedArray[i].price+'</h4><br><h6>Quantity: '+storedArray[i].quantity+'</h6></div></div></div>')
                TotalAmountItem += parseInt(storedArray[i].price * storedArray[i].quantity)
            }


            $("#totalItem").append('<div class="total text-end"><h3>Total: $'+TotalAmountItem+'</h3><button class="checkout">Checkout</button></div>');
            $("#totalItemCheckout").append('<div class="total text-start mb-5" style="background-color: #518706; padding: 10px;"><h3>Total: $'+TotalAmountItem+'</h3><input type="hidden" id="amountVal" value="'+TotalAmountItem+'"/></div>');
            if(storedArray.length <= 0){
                $("#totalItem").hide()
                $("#empty").show()
            }
            else{
            $("#totalItem").show()
            $("#empty").hide()
            }

            $(document).on("click", ".cancel",function(){
                console.log(jsonArray)
                var idItem = $(this).attr("id");

                var idToRemove = idItem;

                // Use the filter() method to remove the object with the specified id
                var filteredArray = storedArray.filter(function(item) {
                    return item.id !== idToRemove;
                });

                localStorage.setItem("myCart", "[]")
                var old_data = JSON.parse(localStorage.getItem("myCart"))
                // Push each element of filteredArray into the old_data array
                for (var i = 0; i < filteredArray.length; i++) {
                    old_data.push(filteredArray[i]);
                }
                localStorage.setItem("myCart", JSON.stringify(old_data))

                window.location.reload()

                
            })

            $(".next").click(function(){
                if($("#fname").val() != "" && $("#lname").val() != "" && $("#email").val() != "" && $("#cnum").val() != "" && $("#address").val() != ""){
                    $(".yourDetails").hide()
                    $(".yourTrip").show()
                    $(this).hide()
                }else{
                    Swal.fire(
                    'Failed',
                    'Please fill the required fields',
                    'error'
                    )
                }
               
            })


            $("#dateStart").click(function(){
                this.showPicker();
            })
            $("#dateEnd").click(function(){
                this.showPicker();
            })
        </script>

        <script>
            paypal.Buttons({
                onClick(){
                    // alert($("#numPerTravel").val())
                    if($("#numPerTravel").val().length == 0 || $("#countChildren").val().length == 0 || $("#countTravellers").val().length == 0 || $("#budget").val().length == 0 || $("#dateStart").val().length == 0 || $("#dateEnd").val().length == 0 || $("#airport").val().length == 0){
                        Swal.fire(
                        'Failed',
                        'Please fill the required fields',
                        'error'
                        )
                        return false;
                    }
                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                currency_code: "USD",
                                value: $("#amountVal").val()
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        // Show a success message to the buyer
                        
                        const transaction = details.purchase_units[0].payments.captures[0]

                        if(transaction.status == "COMPLETED"){
                            setSessionCookie("transaction_id", transaction.id);
                            var formData = $("#detailsForm").serialize()+"&SubmitPayment=SubmitPayment"
                            $.ajax({
                                type: "POST",
                                url: "receive_payments.php",
                                data: formData,
                                success: function(response){
                                    setSessionCookie("email", $("#email").val());
                                    if(response == "Success"){
                                        $.ajax({
                                        type: "POST",
                                        url: "order_items.php",
                                        data: JSON.stringify({ myCart: JSON.parse(localStorage.getItem("myCart")) }), // Ensure data is parsed as JSON
                                        contentType: "application/json", // Set content type to JSON
                                        success: function (res) {
                                            alert(res)
                                            if(res.trim() == "Success"){
                                                localStorage.removeItem('myCart');
                                                Swal.fire({
                                                    title: 'Success',
                                                    text: "Your order has been placed",
                                                    icon: 'warning',
                                                    showCancelButton: false,
                                                    confirmButtonColor: '#518706',
                                                    confirmButtonText: 'Okay'
                                                    }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        window.location.href="history.php"
                                                    }
                                                }) 
                                            }
                                            
                                        }
                                    });


                                        
                                    }else{
                                        Swal.fire(
                                            'Failed',
                                            'Something went wrong...',
                                            'error'
                                        )
                                    }
                                }
                            })
                        }
                    });
                }
            }).render("#paypal-button-container")

            // Function to set a session cookie
        function setSessionCookie(name, value) {
            document.cookie = name + "=" + value + "; path=/";
        }

        $(".checkout").click(function(){
            $("#checkoutPanel").show();
            $("#myCart").hide();
            $("#totalItem").hide();
            
        })

        $(".my_items").click(function(){
            window.location.href="services.php#byservicefee"
            
        })

        // Usage example
        </script>
    </body>
</html>