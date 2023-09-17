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
	top: 120%;
	left: 0;
}
section.left .contactTitle h2::after{
	content: '';
	position: absolute;
	width: 50%;
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
	transition: 0.4s;
	border: 1px solid #518706;
}
.socialMedia img{
    width: 18px;
    margin-top: 6px;
}
.socialMedia a i{
	color: #ddd;
	line-height: 35px;
	border: 1px solid transparent;
	transition-delay: 0.4s;
}
.socialMedia a:hover{
	transform: translateY(-5px);
	background-color: #2e2e2e;
	color: #518706;
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



    </style>
</head>




    <body style="background-color: #000000;">
          
        <div style="overflow: hidden;">
        <?php include 'header.php'; ?>


            <div class="header-content">
                <h1 style="z-index: 9;">Contact Us</h1>
                <div class="overlay"></div>
            
            </div>

<br><br><br><br>
            <div class="container mt-5" style="margin-bottom: 350px;">
                <main class="row">
                    
                    <!--  *******   Left Section (Column) Starts   *******  -->
        
                    <section class="col left">
                        
                        <!--  *******   Title Starts   *******  -->
        
                        <div class="contactTitle">
                            <h2>Get In Touch</h2>
                            <p>Let us help you plan <br>your dream travel to Japan</p>
                        </div>
        
                        <!--  *******   Title Ends   *******  -->
        
                        <!--  *******   Contact Info Starts   *******  -->
        
                        <div class="contactInfo">
                            
                            <div class="iconGroup">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="details">
                                    <span>+63 945 837 3358</span>
                                </div>
                            </div>
        
                            <div class="iconGroup">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="details">
                                    <span>info@asatsuyu-travel.com</span>
                                </div>
                            </div>

        
                        </div>
        
                        <!--  *******   Contact Info Ends   *******  -->
        
                        <!--  *******   Social Media Starts   *******  -->
        
                        <div class="socialMedia">
                            <a href=""><i class="fa-brands fa-facebook" style="color: #4267b2;"></i></a>
                            <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" width="30" alt=""></a>
                            <a href=""><i class="fa-brands fa-square-twitter" style="color: #1da1f2"></i></a>
                            <a href=""><i class="fa-brands fa-telegram" style="color: #0088cc;"></i></a>
                            <a href=""><i class="fa-brands fa-square-whatsapp" style="color: #25d366;"></i></a>
                        </div>
        
                        <!--  *******   Social Media Ends   *******  -->
        
                    </section>
        
                    <!--  *******   Left Section (Column) Ends   *******  -->
        
                    <!--  *******   Right Section (Column) Starts   *******  -->
        
                    <section class="col right">
                        
                        <!--  *******   Form Starts   *******  -->
        
                        <h5>Your Details</h5>
                        <form class="messageForm" id="messageForm">
                            <div class="inputGroup halfWidth">  
                                <input type="text" name="fname" id="fname" required="required">
                                <label>First Name <span style="color: red;">*</span></label>
                            </div>
        
                            <div class="inputGroup halfWidth">
                                <input type="text" name="lname" id="lname" required="required">
                                <label>Last Name <span style="color: red;">*</span></label>
                            </div>
                            <div class="inputGroup halfWidth">
                                <input type="text" name="cnum" id="cnum" required="required">
                                <label>Contact Number <span style="color: red;">*</span></label>
                            </div>
        
                            <div class="inputGroup halfWidth">
                                <input type="text" name="email" id="email" required="required">
                                <label>Email <span style="color: red;">*</span></label>
                            </div>
                            <div class="inputGroup fullWidth">
                                <input type="text" name="address" id="address" required="required">
                                <label>Address <span style="color: red;">*</span></label>
                            </div>
                            <h5 class="mt-5">Your Trip</h5>
                            <div class="inputGroup fullWidth">
                                <input type="number" name="travellers" id="travellers" required="required">
                                <label>How many travellers? <span style="color: red;">*</span></label>
                            </div>
                            <div class="inputGroup halfWidth">
                                <input type="number" name="adults" id="adults" required="required">
                                <label>No. of persons travelling: <small>Adults(age 12+)</small> <span style="color: red;">*</span></label>
                            </div>
                            <div class="inputGroup halfWidth">
                                <input type="number" name="children" id="children" required="required">
                                <label>Children: <small>age 0-12</small> <span style="color: red;">*</span></label>
                            </div>
                            <div class="mb-3 mt-3 customDate">
                                <label for="exampleInputEmail1" class="form-label" style="color: #888;">Start Travel <small>(Estimated)</small> <span style="color: red;">*</span></label>
                                <input type="date" name="startDate" id="startDate">
                                <i class="fa-solid fa-calendar"></i>
                              </div>
        
                              <div class="mb-3 mt-3 customDate">
                                <label for="exampleInputEmail1" class="form-label" style="color: #888;">End Travel <small>(Estimated)</small> <span style="color: red;">*</span></label>
                                <input type="date" name="endDate" id="endDate" >
                                <i class="fa-solid fa-calendar"></i>
                              </div>


                            <div class="inputGroup fullWidth">
                                <input type="text" name="airport" id="airport" required="required">
                                <label>What is the city/airport that you will be departing from? <span style="color: red;">*</span></label>
                            </div>
                            <div class="mb-3" style="width: 100%;">
                                <label for="exampleInputEmail1" class="form-label" style="color: #888;">Budget for accomodation per room, per night? <span style="color: red;">*</span></label>
                                <select name="budget" id="budget" id="" class="customSelect">
                                    <option value="">-Select-</option>
                                    <option value="$500 - $1000">$500 - $1000</option>
                                    <option value="$1000 - $1500">$1000 - $1500</option>
                                    <option value="$1500 - $2000">$1500 - $2000</option>
                                    <option value="$2000+">$2000+</option>
                                </select>
                              </div>

                            <div class="inputGroup fullWidth">
                                <input type="text" name="ideal" id="ideal" required="required">
                                <label>Tell us about your ideal trip. <small style="color: #888;">(e.g: Interest, Activities, Foods, Special Occasion and etc.)</small></label>
                            </div>
                            <div class="inputGroup fullWidth">
                                <input type="text" name="questions" id="questions" required="required">
                                <label>Any extra info or questions? <small style="color: #888;">(We're here to make your experience better!)</small></label>
                            </div>
        
        
                            <div class="inputGroup fullWidth">
                                <a href="javascript:void(0)" class="btn custombtn ps-5 pe-5" id="sendMessageBtn">Send Message</a>
                            </div>
        
                        </form>
        
                        <!--  *******   Form Ends   *******  -->
                    </section>
        
                    <!--  *******   Right Section (Column) Ends   *******  -->
        
                </main>
            </div>

            <?php include 'footer.php'; ?>

        </div>

        <script>

            $("#sendMessageBtn").click(function(){
                var fname = $("#fname").val().length;
                var lname = $("#lname").val().length;
                var cnum = $("#cnum").val().length;
                var email = $("#email").val().length;
                var address = $("#address").val().length;
                var travellers = $("#travellers").val().length;
                var adults = $("#adults").val().length;
                var children = $("#children").val().length;
                var startDate = $("#startDate").val().length;
                var endDate = $("#endDate").val().length;
                var airport = $("#airport").val().length;
                var budget = $("#budget").val().length;
                var ideal = $("#ideal").val().length;
                var questions = $("#questions").val().length;

                if(fname == 0 || lname == 0 || cnum == 0 || email == 0 || address == 0 || travellers == 0 || adults == 0 || children == 0
                || startDate == 0 || endDate == 0 || airport == 0 || budget == 0){
                    Swal.fire(
                    'Failed',
                    'Please fill the required fields',
                    'error'
                    )
                }else{
                    var formData = $("#messageForm").serialize()+"&MessageForm=MessageForm"
                    $.ajax({
                        type: 'POST',
                        url: 'contact_form.php',
                        data: formData,
                        success: function(resp){
                            alert(resp)
                        }
                    })
                }
            })
    
            $("#startDate").click(function(){
                this.showPicker();
            })
            $("#endDate").click(function(){
                this.showPicker();
            })
        </script>
    </body>
</html>