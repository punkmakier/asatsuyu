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



.main-content{
    width: 65vw;
    margin: 0 auto;
    background-color: #64A705;
    display: flex;
    justify-content: center;
    position: relative;
}
.description{
    width: 40vw !important;
    margin-top: 80px !important;
    margin-left: 150px;
}
.description ul li{
    margin-top: 10px;
    font-size: 0.9rem;
}
.main-content .image-container{
    width: 50% !important;
    padding: 0;
    margin: 0;
}
.main-content .image-container img{
    object-fit: cover;
}
.content-container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 50%;
}
.content-container h2{
    margin-bottom: 60px;
    color: #000;
    text-align: start !important;
    font-size: 1.3rem;
    margin-left: -170px;
}
.content-container p{
    width: 70%;
    line-height: 2.5rem;
    text-align: start;
}

.custom-btn{
    background-color: #000000;
    padding: 15px 30px;
    color: #fff;
    border: none;
    margin-top: 30px;
    text-decoration: none;
}
.custom-btn:hover{
    background-color: #191919;
}
.paybtn:hover{
    background-color: #6ca817 !important;
}


.servicefee{
    background-color: #191919;
    margin-top: 200px;
    padding-bottom: 200px !important;

}
.innerservicefee{
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content:space-between;
    align-items: center;
    margin-top: 100px;
}

.innerservicefee .itemservice{
    width: 30%;
    background-color: #518706;
    padding: 40px;
    position: relative;
}
.innerservicefee .itemservice img{
    width: 260px;
    margin-bottom: 50px;
    position: absolute;
    top: 0%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.innerservicefee .itemservice p{
    text-align: start;
    line-height: 2rem;
    margin-top: 50px;
}
.innerservicefee h4{
    margin-top: 140px;
}

.tripto{
    width: 50%;
    margin: 150px auto;
    margin-bottom: 350px !important;
}
.tripto img{
    margin-right: 60px;
}
.tripto p{
    line-height: 2rem;
    width: 70%;
}
.card-container{
        width: 90%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 20px;
    }

    .card{
        border: none !important;
        background-color: #518706;
        width: calc(50% - 10px); /* Calculate 50% width minus spacing */
        transition: .3s ease;
        border-radius: 0px !important;
    }

    .card:hover{
        transform: translateY(-15px) !important;
        box-shadow: 0 0 20px #1c1c1c;
    }
    .card p{
        color: #ffffff;
        margin: 0 !important;
        width: 100% !important;
        font-size: 0.8rem;
        text-align: center;
    }
    .card h3{
        color: #191919;
        width: 100%;
        text-align: center;
    }
    .card .overlaycard{
        position: absolute;
        bottom: 14%;
        left: -10%;
        width: 250%;
        height: 10vh;
        z-index: 1;
        filter: blur(20px);
    }
.timeline-section h1{
    color: #518706;
    font-size: 4rem;
}

@media only screen and (max-width: 1500px){
    .offer .main-content h2{
        font-size: 1.5rem !important;
    }
    .main-content{
        width: 90% !important;
        overflow: hidden;
    }
    #planning{
        margin-left: 50px !important;
    }
    .innerservicefee{
        width: 95% !important;
    }
    .innerservicefee img{
        width: 200px !important;
    }
    .innerservicefee h4{
        font-size: 1.2rem !important;
        text-shadow: 0 0 3px #000;
        margin-top: 100px !important;
    }
    .innerservicefee h6{
        font-size: 0.8rem !important;
    }
    .innerservicefee p{
        font-size: 0.8rem !important;
        line-height: 1.5rem !important;
    }
    .image-container .image{
        margin-top: 30px !important;
    }
}

@media only screen and (min-width: 992px){
    .offer .main-content h2{
        padding-top: 30px !important;
    }
    .offer  .second{
        padding-bottom: 30px !important;
    }
    .offer  .main-content p{
        line-height: 1.5rem !important;
    }
    .offer  .second img{
        padding-top: 60px !important;
    }
    .offer  .second h2{
        padding-top: 30px !important;
    }

    .offer img{
        width: 500px !important;
    }
    .image-container .image{
        margin-top: 30px !important;
    }
}
@media only screen and (max-width: 992px){

    .header-content{
        height: 50vh !important;
    }
    .header-content p{
        width: 90% !important;
    }
    .sections {
        display: none !important;

    }
    .card-container{
        display: block !important;
    }
    .card-container .card{
        text-align: center;
        margin: 0 auto;
        border: 1px solid #518706 !important;
        margin-bottom: 30px !important;
        width: 90% !important;
    }
    .main-content .image-container{
        width: 100% !important;
        margin: 0 auto !important;
        text-align: center !important;
    }
    .main-content .image-container img{
        width: 300px;
    }
    
    .main-content {
        width: 100%;
        background-color: #64A705;
        display: flex;
        justify-content: center;
        position: relative;
        flex-direction: column;
    }
    #planning{
        text-align: center !important;
        margin-left: 0px !important;
    }
    .description{
        width: 90% !important;
        margin: 0 auto;
    }
    .innerservicefee .itemservice {
        width: 95% !important;
        margin-bottom: 30px !important;
    }
    .innerservicefee {
        flex-direction: column;
    }
    .innerservicefee .itemservice{
        margin-top: 150px !important;
    }
    .timeline-section h1{
        font-size: 3.3rem !important;
    }
    .timeline-section .howe{
        text-align: center !important;
        margin-bottom: 150px;
    }


    
    

}

    </style>
</head>




    <body style="background-color: #000000;">
          
        <div style="overflow: hidden;">
            <?php include 'header.php'; ?>


            <div class="header-content" >
                <h1 style="z-index: 9;" data-aos="fade-right" data-aos-duration="2000">Services</h1>
                <p style="z-index: 9;" data-aos="fade-right" data-aos-duration="2000">It is common for travelers to experience anxiety when traveling abroad to non-English speaking countries, particularly when exploring countries that have a different alphabet. As a professional and <br>experienced travel advisor, we are here to save you time, reduce your stress, and offer you a hassle-free <br>and curated travel experience in Japan.</p>
                <div class="overlay"></div>
            
            </div>


            <div class="offer text-center" data-aos="fade-up" data-aos-duration="2000"><br><br><br><br><br><br><br><br>
                <h1 class="mb-5">What We Offer</h1><br><br><br><br>
                <div class="card-container" style="display: none; ">
                    <div class="card" style="width: 18rem; overflow: hidden; "
                    data-aos="fade-up"
                    data-aos-duration="1000">
                        <div class="overlaycard card-img-top"></div>
                        <img src="images/bespoke.webp" class="card-img-top" alt="...">
                        <div class="card-body"  style="overflow: hidden; z-index: 9;">
                          <h3 class="card-title">BESPOKE TRAVEL DESIGN</h3>
                          <p class="card-text" >We work through a consultative process to understand what you hope to experience through your travels in Japan and then design and book customized itineraries. This includes family travel, honeymoons/anniversaries, solo travel around Japan trips, adventure travel, wellness travel and more.</p>
                          <button class="custom-btn mt-5" onclick="scrollToSection('howwework')" >How We Work</button>
                        </div>
        
                    </div>
                    <div class="card" style="width: 18rem; overflow: hidden;"
                    data-aos="fade-up"
                    data-aos-duration="800">
                        <div class="overlaycard card-img-top"></div>
                        <img src="images/wed.webp" class="card-img-top" alt="...">
                        <div class="card-body"  style="overflow: hidden; z-index: 9;">
            
                          <h3 class="card-title">SURPRISE HOLIDAY</h3>
                          <p class="card-text">Surprise Holiday is the perfect way to make a special occasion even more memorable. Whether it's a marriage proposal, anniversary, honeymoon, birthday, or other special occasions, we can help you plan the perfect surprise holiday. We will work with you to create an itinerary that is tailored to your needs and preferences. From accommodation and transport to activities and entertainment, we can make your surprise holiday an experience that you'll never forget.</p>
                          <button class="custom-btn" onclick="scrollToSection('howwework')">How We Work</button>
                        </div>
                    </div>
                </div>

                <div class="sections" data-aos="fade-up" data-aos-duration="2000">
                    <section class="main-content">
                        <div class="image-container">
                            <img src="images/bespoke.webp" alt="">
                        </div>
                        <div class="content-container">
                            <h2 style="margin-left: -100px">BESPOKE TRAVEL DESIGN</h2>
                            <p>We work through a consultative process to understand what you hope to experience through your travels in Japan and then design and book customized itineraries. This includes family travel, honeymoons/anniversaries, solo travel around Japan trips, adventure travel, wellness travel and more.</p>
                            <a class="custom-btn" href="#howwework">How We Work</a>
                        </div>
                    </section>
                    <section class="main-content ">
                        <div class="content-container">
                            <h2>SURPRISE HOLIDAY</h2>
                            <p style="font-size: 0.9rem; margin-top: -30px !important;">Surprise Holiday is the perfect way to make a special occasion even more memorable. Whether it's a marriage proposal, anniversary, honeymoon, birthday, or other special occasions, we can help you plan the perfect surprise holiday. We will work with you to create an itinerary that is tailored to your needs and preferences. From accommodation and transport to activities and entertainment, we can make your surprise holiday an experience that you'll never forget.</p>
                            <a class="custom-btn" href="#howwework">How We Work</a>
                        </div>
                        <div class="image-container">
                            <img src="images/wed.webp" alt="">
                        </div>
                    </section>
                </div>
                
            </div>

            <br><br><br><br><br><br>
            

            <section class="timeline-section">
                <div class="text-center mb-5">
                   
                </div><br><br>
                <div class="container" id="howwework">
                    <div class="row">
                        <div class="col-sm" data-aos="fade-right" data-aos-duration="2000">
                            <div class="howe">
                                <h3>HOW WE WORK</h3>
                                <p>Ready for your trip to Japan?<br>
                                    Let us help you plan everything.</p><br><br>
                                    <a href="contact.php" class="btn custombtn">Get Started <i class="fa-solid fa-arrow-right ms-3"></i></a>
                            </div>
                            
                        </div>
                        <div class="col-sm" >
                            <div class="row mb-5" data-aos="fade-up" data-aos-duration="2000">
                                <div class="col-2 mt-5">
                                    <h1>01</h1>
                                </div>
                                <div class="col mt-5">
                                    <h6 style="color: #518706;">COMPLIMENTARY CONSULTATION</h3>
                                    <p style="font-size: 0.9rem">In this stage, we will learn about when would you like to travel to Japan, your interests, and your preferences. Then we will discuss the client's budget for their trip, how we will move forward and review our professional fee which vary with the type of travel planning/booking undertaken.</p>
                                </div>
                            </div>
                            <div class="row mb-5" data-aos="fade-up" data-aos-duration="2000">
                                <div class="col-2 mt-5">
                                    <h1>02</h1>
                                </div>
                                <div class="col mt-5">
                                    <h6 style="color: #518706;">$ 10 TRIP PLANNING FEE</h3>
                                    <p style="font-size: 0.9rem">Non-refundable trip planning fee. In this stage, we will use our travel expertise, knowledge, and contact our connections to create a curated travel experience for you. We will also do our best for our clients to take advantage of exclusive benefits and perks that you cannot avail by your own.</p>
                                </div>
                            </div>
                            <div class="row mb-5" data-aos="fade-up" data-aos-duration="2000">
                                <div class="col-2 mt-5">
                                    <h1>03</h1>
                                </div>
                                <div class="col mt-5">
                                    <h6 style="color: #518706;">TRAVEL ITINERARY PROPOSAL</h3>
                                    <p style="font-size: 0.9rem">After we curate travel plans, We will provide your customized itinerary well-detailed with the important points of your travel. We will also inform the accommodation and restaurant about your arrival so they can prepare your special request and get ready to welcome you.</p>
                                </div>
                            </div>
                            <div class="row mb-5" data-aos="fade-up" data-aos-duration="2000">
                                <div class="col-2 mt-5">
                                    <h1>04</h1>
                                </div>
                                <div class="col mt-5">
                                    <h6 style="color: #518706;">EXPERIENCE</h3>
                                    <p style="font-size: 0.9rem">After we curate travel plans, We will provide your customized itinerary well-detailed with the important points of your travel. We will also inform the accommodation and restaurant about your arrival so they can prepare your special request and get ready to welcome you.</p>
                                </div>
                            </div>
                            <div class="row mb-5" data-aos="fade-up" data-aos-duration="2000">
                                <div class="col-2 mt-5">
                                    <h1>05</h1>
                                </div>
                                <div class="col mt-5">
                                    <h6 style="color: #518706;">SHARE & TRIP FEEDBACK</h3>
                                    <p style="font-size: 0.9rem">We will appreciate it if you will share your experience with us. We also invite you to give us feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>



<br><br><br><br><br><br>
            <section class="profees text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="2000">
                <h1>Our Professional Fees</h1>     
                <br><br><br><br>
                
                <section class="main-content" style="background-color: #000 !important;">
                    <div class="image-container" data-aos="fade-right" data-aos-duration="2000">
                        <img src="images/luxury_1.png" alt="" width="500" class="image">
                    </div>
                    <div class="text-start" style="padding: 30px" id="planning" data-aos="fade-up" data-aos-duration="2000">
                        <h5 style="color: #518706 !important; font-size: 1.1rem">TRAVEL DESIGN FEE: LUXURY TRAVEL EXPERIENCE</h5><br>
                        <span style="color: #518706 !important; font-weight: 600;font-size: 1rem;">$ 150</span><br><br>
                        <p class="mb-5" style="font-size: 0.9rem;">
                        Includes the Overall bespoke travel design and Trip Planning services. The travel design fee varies based on the length and complexity of the trip and starts at $ 150 per adult for up to 5 days of travel.<br><br>
                        Travel Design Fee, means bespoke travel design, planning, and advice on destinations, accommodations, dining, transportation, activities, and experiences in Japan. <br><br>
                            *Please note that Travel Design Fees are non-refundable and non-transferable. 
                        </p>
                        <div style="text-align: center; margin-top: 20px; ">
                            <button class="custombtn btn ps-5 pe-5 designFee">Add to cart</button>
                        </div>
                    </div>

                    
                </section>
                <div class="description" data-aos="fade-up" data-aos-duration="2000" style="text-align: start;">
                    <h5>Description</h5>
                    <p>
                        <ul>
                            <li>To acknowledge our time and effort put into planning one-of-a-kind experiences for you, we charge Upfront Trip Planning/Service Fees. We are a travel advisory, whereby our clients receive our time as consultants and our expertise as travel planners.</li>
                            <li>Our fees are for Overall Travel Design and Trip Planning.  Fees are non-refundable and non-transferable.</li>
                            <li>Full payment of the Trip Planning Fees must be settled before any services can be rendered. Please use the Credit Card Authorization Form section to fill out the details of your credit card.</li>
                            <li>The trip planning fee covers the discussion of your trip dreams and expectations, and the time spent researching, developing, and revising a proposal to create the perfect customized itinerary.</li>
                            <li>This track is curated for all leisure travelers who are interested in any of our luxury travel design plans.</li>
                            <li>For trips longer than 5 days additional planning fees may apply.</li>
                            <li>50% discount for Children (2-12 years old). Infant 0-2 years old is free.</li>
                            <li>Late Booking: A supplementary charge of $100 will apply to Travel Designs requested within 45 days of the scheduled departure date.</li>
                            <li>Note that for common destinations, we partner with higher-end luxury hotels that generally run from $500-$1,500+ per night per room. This means we typically work with budgets of $1,000+ per day for full itinerary planning (more for larger families or when multiple rooms are needed).</li>
                            <li>Whenever possible we work with net, transparent pricing so that our clients are fully informed of the components of their trip cost.</li>
                            <li>Your curated itinerary will be sent to you via the email address provided no later than 1 week after your request has been made. Changes after initial proposal of customized itinerary will incur a new travel design fee.</li>
                        </ul>
                    </p>
                </div>
                
            </section>



            <section class="servicefee text-center" data-aos="fade-up" data-aos-duration="2000" id="byservicefee"><br><br><br><br><br>
                <h1>By Service Fee</h1><br><br><br><br><br>
                <div class="innerservicefee">
                    <div class="itemservice" data-aos="fade-up" data-aos-duration="1000">
                        <img src="images/plane.png" alt="">
                        <div class="item-content">
                            <h4>AIR TRAVEL</h4>
                            <h6 style="font-size: 0.9rem; margin-top: 30px;">International flight: $ 50/ ticket</h6>
                            <h6 style="font-size: 0.9rem;">Domestic flight: $ 30/ ticket</h6>
                            <p style="font-size: 0.8rem;">Should you wish to have booking assistance with your international flight travel arrangements to Japan and domestic flight around Japan, Our travel advisors are available to provide assistance with every step of the booking process. We also arrange domestic flights within Japan, making it easier for you to get from one destination to the next.</p>
                            <button class="custom-btn choice">Add To Cart</button>
                        </div>
                    </div>
                    <div class="itemservice" data-aos="fade-up" data-aos-duration="2000">
                        <img src="images/hotel.png" alt="">
                        <div class="item-content">
                            <h4>HOTEL BOOKING</h4>
                            <small style="margin-top:-30px">(No Research)</small><br><br>
                            <h6>$ 50/ booking</h6><br>

                            <p style="font-size: 0.8rem;">Our travel advisor is here to help you book exclusive accommodation to stay during your trip. We understand that Japan has thousands of accommodation options and not all of them are available in English, so we are here to assist you in booking luxury accommodation for an unforgettable experience.</p>
                            <button class="custom-btn hotel"  id="2" data-name="HOTEL" data-price="50" data-image="hotel.png" data-desc="Our travel advisor is here to help you book 

exclusive accommodation to stay during your trip. We understand that Japan has thousands of accommodation options and

not all of them are available in English, so we are here to assist you in booking luxury accommodation for an unforgettable experience.">Add To Cart</button>
                        </div>
                    </div>
                    <div class="itemservice" data-aos="fade-up" data-aos-duration="3000">
                        <img src="images/concierge.png" alt="">
                        <div class="item-content">
                            <h4>CONCIERGE SERVICE</h4><br>
                            <h6 style="font-size: 0.9rem; margin-top: 10px;">$ 30 per booking</h6>
                            <h6 style="font-size: 0.9rem;">$ 200 unlimited per trip</h6>

                            <p style="font-size: 0.8rem;">Our Concierge Service is designed to make your stay in Japan as hassle-free as possible. We will provide you with assistance in English and Japanese. This applies to the booking of local restaurants, private cars, taxi,  trains, spa, guided tours, entertainment, and events, as well as other professional services in Japan. </p>
                            <br><br><button class="custom-btn concierge" id="3" data-name="CONCIERGE SERVICE" data-price="50" data-image="concierge.png" data-desc="Our Concierge Service is designed to make your stay in Japan as hassle-free as possible. We will provide you with assistance in English and Japanese. This applies to the booking of local restaurants, private cars, taxi,  trains, spa, guided tours, entertainment, and events, as well as other professional services in Japan.">Add To Cart</button>
                        </div>
                    </div>

                    
                </div>
                <div class="description" style="text-align: start !important; width: 50%;" data-aos="fade-up" data-aos-duration="2000">
                    <h5>Cancellations & Service Fees Policy</h5>
                    <p>
                        <ul>
                            <li>Upfront Service Fees are non-refundable and non-transferable. Fees will apply regardless you decide to take/book the trip/services or not.</li>
                            <li>Full payment of the Service Fees must be settled before any services can be rendered. Please use the Credit Card Authorization Form section to fill out the details of your credit card. </li>
                            <li>Changes and Cancellations: We understand that your plans may change, however, due to the work done in advance to secure reservations and VIP status prior to your trip, we reserve the right to charge a $50 fee for changes or cancellations.</li>
                            <li>Service Fees are subject to change at any moment, without the need for prior notice.</li>
                            <li>Asatsuyu Japan Luxury Travel is not responsible for, nor accepts any liability arising out of any schedule changes implemented by an airline that may impact you, your onward travel, or arrangements consequent on your flights.</li>
                            <li>Please note that the hotel booking service is designed for reserving only one (1) room stays. For multi-room stays, and more elaborate trips, please contact us directly.</li>
                            <li>Concierge Fee is for booking and managing all components, and support while traveling. Access to the service is restricted to the paying client.</li>
                        </ul>
                    </p>
                </div>
            </section>

            <br><br><br><br><br><br><br>
            <div class="profees" data-aos="fade-up" data-aos-duration="2000">
                <section class="main-content" style="background-color: #000 !important;">
                    <div class="image-container" data-aos="fade-right" data-aos-duration="3000">
                        <img src="images/triptojapan_1.png" alt="" width="400" class="image">
                    </div>
                    <div class="text-start" style="padding: 30px" id="planning">
                        <h5 style="color: #518706 !important;">Ready for your trip to Japan?</h5><br>
                        <h6>Let us help you plan everything.</h6><br><br>
                        <p>
                            Every itinerary we design is tailored exclusively for you. Our goal is to craft a one-of-a-kind experience that aligns perfectly with your preferences and desires. To discover more about our personalized offerings, reach out to one of our expert travel advisors.
                        </p>
                        <a href="contact.php" class="btn custombtn text-white ps-5 pe-5 mt-5">Click here for the inquiry form</a>
                    </div>
                    
                </section>
            </div>
            <br><br><br><br><br><br><br><br>

            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header bg-success">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body bg-success">
                    Item has been added to your cart
                  </div>
                </div>
              </div>

              <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Select a plan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="" class="text-dark">Choose:</label>
                            <select name="" class="form-select" id="chooseItem">
                                <option class="text-dark" value="50">International flight: $ 50/ ticket</option>
                                <option class="text-dark" value="30">Domestic flight: $ 30/ ticket</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="text-dark">How many ticket?</label>
                            <input type="number" id="quantyTicket" class="form-control" oninput="enableButton('quantyTicket','airbtn')">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn custombtn airbtn addToCart" disabled id="1" data-name="Air Travel" data-image="plane.png" data-desc="Should you wish to have booking assistance with your international flight travel arrangements to Japan and domestic flight around Japan, Our travel advisors are available to provide assistance with every step of the booking process. We also arrange domestic flights within Japan, making it easier for you to get from one destination to the next.">Submit</button>
                    </div>
                </div>
                </div>
            </div>


             <!-- Modal -->
             <div class="modal fade" id="hotelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Select a hotel booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="mb-3">
                            <label for="" class="text-dark">How many hotel to book?</label>
                            <input type="number" id="quantyHotel" oninput="enableButton('quantyHotel','hotelbtn')" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn custombtn hotelbtn addToCart" id="2" data-price="50" disabled data-name="Hotel" data-image="hotel.png" data-desc="Our travel advisor is here to help you book exclusive accommodation to stay during your trip. We understand that Japan has thousands of accommodation options and not all of them are available in English, so we are here to assist you in booking luxury accommodation for an unforgettable experience.">Submit</button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="conciergeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Select a concierge service booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="" class="text-dark">Choose:</label>
                            <select name="" class="form-select" id="chooseItemConcierge">
                                <option class="text-dark" value="30">$ 30 per booking</option>
                                <option class="text-dark" value="200">$ 200 unlimited per trip</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="text-dark">How many booking?</label>
                            <input type="number" id="quantyConcierge" oninput="enableButton('quantyConcierge','concierge')" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn custombtn concierge addToCart" id="3" data-price="100" disabled data-name="Concierge Service" data-image="concierge.png" data-desc="Our Concierge Service is designed to make your stay in Japan as hassle-free as possible. We will provide you with assistance in English and Japanese. This applies to the booking of local restaurants, private cars, taxi,  trains, spa, guided tours, entertainment, and events, as well as other professional services in Japan.">Submit</button>
                    </div>
                </div>
                </div>
            </div>

                <!-- Modal -->
                <div class="modal fade" id="designFeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h6 class="modal-title fs-5 text-dark" id="exampleModalLabel">Select TRAVEL DESIGN FEE</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="" class="text-dark">How many adults to avail?</label>
                            <input type="number" id="quantyDesignFee" oninput="enableButton('quantyDesignFee','DesignFee')" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn custombtn DesignFee addToCart" id="4" data-price="150" disabled data-name="TRAVEL DESIGN FEE: LUXURY TRAVEL EXPERIENCE" data-image="luxury_1.png" data-desc="">Submit</button>
                    </div>
                </div>
                </div>
            </div>
            


        <?php include 'footer.php'; ?>
        </div>




        <script>
            function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: "smooth" });
            }
            }
            $(document).on("click",".choice",function() {
                $("#exampleModal").modal("show");
            })
            $(document).on("click",".concierge",function() {
                $("#conciergeModal").modal("show");
            })
            $(document).on("click",".hotel",function() {
                $("#hotelModal").modal("show");
            })
            $(document).on("click",".designFee",function() {
                $("#designFeeModal").modal("show");
            })
            
            function enableButton(input, btn){
                if($("#"+input).val().length != 0){
                    $("."+btn).prop("disabled", false);
                }else{
                    $("."+btn).prop("disabled", true);
                }
            }




            $(document).on("click",".addToCart", function(){
                var itemId = $(this).attr("id")
                var nameItem = $(this).attr("data-name")
                var priceItem = $(this).attr("data-price")
                var imgItem = $(this).attr("data-image")
                var descItem = $(this).attr("data-desc")

                if(itemId == 1){
                    priceItem = $("#chooseItem").val();
                    quantityItem = $("#quantyTicket").val();
                }
                if(itemId == 2){
                    quantityItem = $("#quantyHotel").val();
                }
                if(itemId == 3){
                    quantityItem = $("#quantyConcierge").val();
                    priceItem = $("#chooseItemConcierge").val();
                    
                }
                if(itemId == 4){
                    quantityItem = $("#quantyDesignFee").val();
                    
                }
                

                var items = {
                    id: itemId,
                    name: nameItem,
                    price: priceItem,
                    quantity: quantityItem,
                    image: imgItem,
                    description: descItem
                }
                if(localStorage.getItem("myCart") == null){
                    localStorage.setItem("myCart", "[]")
                }

                var old_data = JSON.parse(localStorage.getItem("myCart"))
                old_data.push(items)
                localStorage.setItem("myCart", JSON.stringify(old_data))

                const toastLiveExample = document.getElementById('liveToast')
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)

                let getStore = localStorage.getItem('myCart');
                // Parse the JSON string back to an array
                
                toastBootstrap.show()
                $("#exampleModal").modal("hide");
                $("#hotelModal").modal("hide");
                $("#conciergeModal").modal("hide");
                $("#designFeeModal").modal("hide");

                var storeHolder = JSON.parse(getStore);
                $(".countItems").text(storeHolder.length)
                

            })
            AOS.init();
            var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            });
    

    
        </script>
    </body>
</html>