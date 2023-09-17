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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

    <style>
        

        .card{
        border: none !important;
        background-color: #191919;
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
        color: #518706;
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
    .card-container{
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 20px;
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


        .swiper {
        max-width: 50%;
        height: 60vh;
        position: relative;
        justify-content: center !important;
        align-items: center !important;
        margin-top: 50px;
        }

        .swiper-slide {
            position: relative;
            background-position: center;
            background-size: cover;
        }
        .swiper-slide h4{
            position: absolute;
            top:  10%;
            left: 5%;
            text-align: center;
            padding: 10px;
            text-shadow: 0 0 3px #000;
            font-size: 4rem;
        }

        .swiper-slide img {
        display: block;
        width: 100%;
        }
        main{
            background-color: #191919;
            margin-top: 50px;
            height: auto;
            padding-bottom: 50px;
        }
        main span{
            text-align: center;
            width: 100%;
            margin-top: 50px !important;
            font-size: 1.3rem;
            font-style: italic;
        }

        section h3{
            color: #64A705;
            margin-bottom: 30px;
        }
        .section-1{
            height: 400px;
            position: relative;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-right: -400px;
        }

        .section-content{
            border: 1.5px solid #64A705;
            padding: 50px;
            width: 700px;
            position: relative;
            text-align: end;
            border-radius: 3px;
            max-height: 500px;
        }
        .section-content p{
            width: 70%;
            float: right;
            font-size: 0.9rem;
        }
        .section-content h3{
            font-size: 1.4rem;
        }
        .section-img{
            position: absolute;
            width: 600px;
            left: -60%;
            top: -15%;
        }


        .section-2{
            height: 400px;
            position: relative;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-left: -400px;
        }

        .section-content-2{
            border: 1.5px solid #64A705;
            padding: 50px;
            width: 700px;
            position: relative;
            text-align: start;
            border-radius: 3px;
            height: 500px;

        }
        .section-content-2 p{
            width: 70%;
            float: left;
            font-size: 0.9rem;
        }
        .section-content-2 h3{
            font-size: 1.4rem;
        }

        .section-img-2{
            position: absolute;
            width: 600px;
            right: -60%;
            top: -15%;
        }
        .letus{
            text-align: center;
            padding: 50px;
            background-color: #fff;
        }
        .letus p{
            font-size: 1.2rem;
            color: #000000;
        }
        
    @media only screen and (max-width: 992px){
        .swiper-slide h4{
            top:  5%;
            left: 5%;
            width: 120px;
            font-size: 0.9rem;
            padding: 10px;
        }
        main{
            width: 100% !important;
             background-color: #191919;
             text-align: center !important;
        }
        .header-content{
            height: 60vh !important;
        }
        .header-content p{
            width: 80% !important;
        }
        .swiper {
        max-width: 90%;
        height: 60vh;
        margin-top: 220px !important;
        }
        .swiper-button-next, .swiper-button-prev, .swiper-pagination{
            display: none;
        }
        .card-container{
            display: block !important;
        }
        #mainpart{
            display: none !important;
        }
        .card-container .card{
            text-align: center;
            margin: 0 auto;
            border: 1px solid #518706 !important;
            margin-bottom: 30px !important;
            width: 95% !important;
        }
        .moreBtn{
            width: 20% !important;
        }

        .swiper-wrapper h4{
            font-size: 2.5rem;
        }
        .text-custom-swiper{
            width: 60% !important;
            bottom: 40% !important; left: 5%;text-shadow: 0 5px 10px rgba(0,0,0); font-weight: 400;
            font-size: 0.9rem;
        }

    }

    .swiper-wrapper{
        position: relative;
    }


    .swiper-pagination-bullet{
        border: 3px solid #fff !important;
        width: 13px;
        height: 13px;
    }
    .swiper-pagination-bullet-active{
        background: #fff !important;
    }



    
    </style>
</head>




    <body style="background-color: #000000;">
          
        <div style="overflow: hidden;">
            <?php include 'header.php'; ?>

            <div class="header-content" data-aos="fade-right" data-aos-duration="2000">
                <h1>Experience</h1>
                <p>Japan has four seasons.  Each season has its own charm. So we encourage you to visit and see, feel and witness the dramatic transition of nature in each season. Apart from that, there are endlessly interesting and amazing places to explore and experience in Japan whichever month you would feel like spending your holiday.</p>
            </div>
            <div class="swiper mySwiper" data-aos="fade-up" data-aos-duration="2000">
                <div class="headerOverlay"></div>
                <div class="swiper-wrapper">
                    

                  <div class="swiper-slide">
                    <img src="images/winter_1.webp" alt="">
                    <h4 style="font-family: 'Playfair Display', serif;">Winter</h4>
                  </div>
                  <div class="swiper-slide">
                    <img src="images/spring_1.webp" />
                    <h4 style="font-family: 'Playfair Display', serif;">Spring</h4>
                  </div>
                  <div class="swiper-slide">
                    <img src="images/sumer_1.webp" />
                    <h4 style="font-family: 'Playfair Display', serif;">Summer</h4>
                  </div>
                  <div class="swiper-slide">
                    <img src="images/autumn_1.webp" />
                    <h4 style="font-family: 'Playfair Display', serif;">Autumn</h4>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="group">
                    <div class="swiper-pagination"></div>
                </div>
                </div>
                

            <main>
                <div class="card-container" style="display: none;">
                    <br><br><br><br><br><br>
                    <span>Each itinerary we create is by definition, unique.</span>
                    <br><br><br><br><br><br>
                    <div class="card" style="width: 18rem; overflow: hidden;"
                    data-aos="fade-up"
                    data-aos-duration="1000">
                        <div class="overlaycard card-img-top"></div>
                        <img src="images/accomodation_1.png" class="card-img-top" alt="...">
                        <div class="card-body"  style="overflow: hidden; z-index: 9;">
            
                          <h3 class="card-title">ACCOMMODATION</h3>
                          <p class="card-text">As of January 2020, the number of accommodation facilities in Japan was 51, 987 and the number of rooms was 1,625,219. Travel is more complicated these days with thousands of accommodation choices in Japan. A lot of beautiful hotels and traditional inns in Japan are ones you have never heard of. And lots of them could not be easily searched on English websites. This is where a travel advisor’s knowledge cannot be beat. Note that we only offer luxury accommodations for an exclusive experience.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; overflow: hidden;"
                    data-aos="fade-up"
                    data-aos-duration="800">
                        <div class="overlaycard card-img-top"></div>
                        <img src="images/dining_1.png" class="card-img-top" alt="...">
                        <div class="card-body"  style="overflow: hidden; z-index: 9;">
            
                          <h3 class="card-title">DINING</h3>
                          <p class="card-text">There are many choices of dining experience in Japan. A kaiseki, izakaya, and cool theme restaurants that you should never miss. If you only have a few days holiday, we have a list of carefully selected restaurants and izakaya that have unique offerings. We will assist you with reservations and help you inform them in advance about your food restrictions.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; overflow: hidden;"
                    data-aos="fade-up"
                    data-aos-duration="600">
                        <div class="overlaycard card-img-top"></div>
                        <img src="images/sightseeing_1.png" class="card-img-top" alt="...">
                        <div class="card-body"  style="overflow: hidden; z-index: 9;">
            
                          <h3 class="card-title">SIGHTSEEING</h3>
                          <p class="card-text">Japan is an incredible country with a myriad of attractions to explore. From ancient temples, to modern cities, to breathtaking landscapes. A trip to Japan is a great way to experience the culture, history, and beauty of the country. Japan is sure to create lasting memories and provide a unique and unforgettable experience.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; overflow: hidden;"
                    data-aos="fade-up"
                    data-aos-duration="400">
                        <div class="overlaycard card-img-top"></div>
                        <img src="images/traditional_1.png" class="card-img-top" alt="...">
                        <div class="card-body"  style="overflow: hidden; z-index: 9;">
            
                          <h3 class="card-title">TRADITIONAL WELLNESS</h3>
                          <p class="card-text"><i>"Relax your mind and body in onsen."</i><br>

                            Japan, which is also a volcanic country, has more than 3,000 onsen places and more than 20,000 onsen facilities. Scientific studies suggest onsens improve blood circulation and sleep, lower blood pressure, improvement of muscle pain and skin diseases. It has also benefits to relieve anxiety and reduce stress.</p>
                        </div>
                    </div>
                </div>

                <div class="container text-center pt-5" id="mainpart">
                    <br>
                    <span>Each itinerary we create is by definition, unique.</span>
                    <br><br><br><br><br><br>
                    <section class="mt-5 section-1" data-aos="fade-up" data-aos-duration="2000">
                        <div class="section-content">
                            <img src="images/accomodation_1.png" alt="" class="section-img" style="top: -10%">
                            <!-- <img src="images/acco.webp" class="section-img" alt="..."> -->
                            <h3>ACCOMMODATION</h3>
                            <p>As of January 2020, the number of accommodation facilities in Japan was 51, 987 and the number of rooms was 1,625,219. Travel is more complicated these days with thousands of accommodation choices in Japan. A lot of beautiful hotels and traditional inns in Japan are ones you have never heard of. And lots of them could not be easily searched on English websites. This is where a travel advisor’s knowledge cannot be beat. Note that we only offer luxury accommodations for an exclusive experience.</p>
                        </div>
                    </section>
                    <br><br>
                    <section class="mt-5 section-2" data-aos="fade-up" data-aos-duration="2000">
                        <div class="section-content-2">
                            <img src="images/dining_1.png" alt="" class="section-img-2">
                            <h3>DINING</h3>
                            <p>There are many choices of dining experience in Japan. A kaiseki, izakaya, and cool theme restaurants that you should never miss. If you only have a few days holiday, we have a list of carefully selected restaurants and izakaya that have unique offerings. We will assist you with reservations and help you inform them in advance about your food restrictions.</p>
                        </div>
                    </section>
                    <br><br>
                    <section class="mt-5 section-1" data-aos="fade-up" data-aos-duration="2000">
                        <div class="section-content">
                            <img src="images/sightseeing_1.png" alt="" class="section-img">
                            <h3>SIGHTSEEING</h3>
                            <p>Japan is an incredible country with a myriad of attractions to explore. From ancient temples, to modern cities, to breathtaking landscapes. A trip to Japan is a great way to experience the culture, history, and beauty of the country. Japan is sure to create lasting memories and provide a unique and unforgettable experience.</p>
                        </div>
                    </section>
                    <br><br>
                    <section class="mt-5 section-2" data-aos="fade-up" data-aos-duration="2000">
                        <div class="section-content-2">
                            <img src="images/traditional_1.png" alt="" class="section-img-2">
                            <h3>TRADITIONAL WELLNESS</h3>
                            <p>
                                <i>"Relax your mind and body in onsen."</i><br><br>
                                Japan, which is also a volcanic country, has more than 3,000 onsen places and more than 20,000 onsen facilities. Scientific studies suggest onsens improve blood circulation and sleep, lower blood pressure, improvement of muscle pain and skin diseases. It has also benefits to relieve anxiety and reduce stress.</p>
                        </div>
                    </section>
                    <br><br>
                    <br><br>
                </div>
            </main>


            <div class="letus" >
                <p data-aos="fade-right" data-aos-duration="2000">Let us help you experience the beauty of Japan.</p>
                <a href="services.php" data-aos="fade-right" data-aos-duration="2000" class="btn custombtn moreBtn" style="width: 10%; margin-top: 30px;">More</a>
            </div>
            


            <?php include 'footer.php'; ?>

        </div>

        <script>
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