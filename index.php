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

    .headerOverlay{
        z-index: 2 !important;
    }
    .swiper {
      max-width: 100%;
      height: 80vh;
      position: relative;
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }

    
    .about h1{
        color: #64A705;
    }
    .about h4{
        color: #64A705;
    }
    .about p{
        letter-spacing: 1px;
        margin-bottom: 50px;
        text-shadow: 0 0 4px #fff;

    }
    .seeMore{
        text-decoration: none;
        border: 1px solid #64A705;
        color: #64A705;
        padding: 8px 30px;
    }
    #experience{
        margin-top: 250px;
        text-align: center;
    }
    #experience h1{
        color: #64A705;
    }
    #experience p{
        letter-spacing: 1px;
        margin-bottom: 50px;
        text-shadow: 0 0 4px #fff;
        width: 60%;
        margin: 0 auto;
        margin-top: 60px;
        margin-bottom: 130px;
    }
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
    .card h5{
        position: absolute;
        bottom: 30%;
        left: 0;
        color: #fff;
        z-index: 10;
        width: 100%;
        text-align: center;
        text-shadow: 0 1px 10px #34ff0b;
    }
    .card .overlaycard{
        position: absolute;
        bottom: 14%;
        left: -10%;
        background-color: #191919;
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

    
    
    

    #about_section{
        padding: 80px 0;
        width: 100%;
        height: 80vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .image-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 20px; /* Height of the blurred border */
    background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 0.5)); /* Gradient background for the border */
    filter: blur(10px); /* Apply blur effect */
    }

    #aboutsec::before{
        content: "";
        position: absolute;
        top: -10px; /* Adjust the value to control the size of the blurred border */
        left: 0;
        width: 100%;
        height: 20px; /* Adjust the value to control the size of the blurred border */
        filter: blur(10px); /* Adjust the blur amount as needed */
        background: #000; /* Adjust the color and opacity as needed */
        z-index: 2;
    }
    #aboutsec::after{
        content: "";
        position: absolute;
        bottom: -10px; /* Adjust the value to control the size of the blurred border */
        left: 0;
        width: 100%;
        height: 20px; /* Adjust the value to control the size of the blurred border */
        filter: blur(10px); /* Adjust the blur amount as needed */
        background: #000; /* Adjust the color and opacity as needed */
        z-index: 2;
    }
    

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px){
            #logo{
                width: 150px !important;
            }
            #moreaboutus{
                font-size: 0.9rem !important;
                width: 50% !important;
            }
            #aboutsec::before{
                display: none !important;
            }
            
            .mobileToggleMenu{
                display:block !important;
            }
            
            .swiper{
                height: 40vh;
            }
 
            .swiper-button-next, .swiper-button-prev{
                display: none;
            }
            
            #aboutsec{
                width: 100% !important;
            }
            .about{
                width: 90% !important;
            }
            .about p{
                font-size: 0.9rem;
            }
            .about h1{
                margin-bottom: 50px;
            }
            .about h4{
                font-size: 1.2rem;
            }
            #experience p{
                width: 90% !important;
            }


            .leaf-1{
                left: 0;
                top: -5%;
            }
            .leaf-1 img{
                width: 130px !important;
            }
            .leaf-2{
                z-index: 1;
            }
            .leaf-2 img{
                width: 180px !important;
            }
            #about_section{
                height: 110vh !important;
            }
        }
        /* Small devices (portrait, tablets and large phones,600px and up) */
        @media only screen and (min-width: 600px){
            
            .leaf-1{
                left: 0;
                top: -5%;
            }
            .leaf-1 img{
                width: 180px !important;
            }
            .leaf-2{
                z-index: 1;
            }
            .leaf-2 img{
                width: 250px !important;
            }
            #about_section{
                height: 110vh !important;
            }

            

            #experience p{
                width: 90% !important;
            }
            
            .swiper{
                height: 50vh;
            }
            .swiper-button-next, .swiper-button-prev{
                display: none;
            }
            #aboutsec{
                width: 100% !important;
            }
            .about{
                width: 90% !important;
            }
            .about p{
                font-size: 0.9rem;
            }
            .about h1{
                margin-bottom: 50px;
            }
            .about h4{
                font-size: 1.2rem;
            }
            
        }
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px){
            .leaf-1{
                left: 0;
                top: -5%;
            }
            .leaf-1 img{
                width: 200px !important;
            }
            .leaf-2{
                z-index: 1;
                bottom: 3% !important;

            }
            .leaf-2 img{
                width: 320px !important;
            }
            #about_section{
                height: 110vh !important;
            }

            
            #experience p{
                width: 50% !important;
            }
        }
        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px){



            
            .swiper{
                width: 100%;
                height: 100vh;
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
            }

            #aboutsec{
                width: 50% !important;
            }
            .about{
                width: 90% !important;
            }
            .about p{
                font-size: 0.9rem;
            }
            .about h1{
                margin-bottom: 50px;
            }
            .about h4{
                font-size: 1.2rem;
            }
        }
        /* Extra Large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px){
            
        }

        .leaf-1{
            position: absolute;
            left: 0;
            top: -5%;
            z-index: 1;
        }
        .leaf-1 img{
            width: 250px;
        }
        .leaf-2{
            position: absolute;
            right: 0;
            bottom: -5%;
        }
        .leaf-2 img{
            width: 380px;
        }
        
        

        .splash{
            background: #fff !important;
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: 9999;
            top: 0;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        .splash h1{
            color: #64A705;
            margin-top: -30px;
        }
        .titleSplash{
            animation: splashscreen 2s;
            font-size: 2rem;
        }
        .splash p{
            color: #00000044;
            letter-spacing: 3px;
            word-spacing: 5px;
        }
        .subSplash{
            animation: splashscreen 2s;
        }
        .imageSplash{
            animation: splashscreen 6s;
        }
        @keyframes splashscreen {
            from{opacity:0}
            to{opacity:1}
        }
        .goUp{
            animation: toHide 3s;
        }
        @keyframes toHide {
            from{
                opacity: 1;
            }
            to{
                opacity: 0;
            }
        }
        
        .swiper-pagination{
            position: absolute;
            left: 5% !important;
            margin-bottom: 50px;
            z-index: 99;
            width: 150px !important;
        }


            .swiper-pagination-bullet{
                border: 3px solid #fff !important;
                width: 13px;
                height: 13px;
            }
            .swiper-pagination-bullet-active{
                background: #fff !important;
            }

            .text-custom-swiper{
                z-index: 99999;
                width: 60% !important;
                bottom: 13%; left: 7.5%;text-shadow: 0 5px 10px rgba(0,0,0); font-weight: 400; position: absolute;
                font-size: 1.2rem;
            }

        
        
        
    </style>
    
    </head>
  <body style="background-color: #000000;">
     <div class="splash">
        <img src="images/logo.webp" class="d-block mx-auto mb-5 imageSplash" width="190" alt="">
        <h1 style="display: none;" class="titleSplash" id="asat">ASATSUYU</h1>
        <p style="display: none;" class="subSplash" id="asatP">JAPAN LUXURY TRAVEL</p>
    </div>
    <div style="overflow: hidden;">
        <?php include 'header.php'; ?>

    <div class="swiper mySwiper">
        <div class="headerOverlay"></div>
        <img src="images/logo.webp" class="d-block mx-auto mb-5" width="180" alt="" id="logo">
        <div class="swiper-pagination"></div>
        <p class="text-custom-swiper">Japan is a wonderful destination for lots of<br>
                    reasons. A country of endless discovery.
                    </p>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://asianwanderlust.com/wp-content/uploads/2018/09/Shinjuku-Tokyo-Kabukicho.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="https://c4.wallpaperflare.com/wallpaper/50/519/649/religious-pagoda-cherry-blossom-japan-wallpaper-preview.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" />
          </div>
          <div class="swiper-slide">
            <img src="https://expertphotography.b-cdn.net/wp-content/uploads/2019/03/travel-pictures-hakone.jpg" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    
</div>

    <section id="about_section">
        <div class="container mt-5" style="width: 60%;" id="aboutsec">
            
            <div class="mt-5 text-center about" style="width: 70%; margin: 0 auto; z-index: 99;" data-aos="fade-up">
                <h1>ASATSUYU 朝露</h1>
                <h4>Luxury Bespoke Travel Experience in Japan</h4><br>
                <p>
                    Asatsuyu Japan Luxury Travel offers access to exclusive experiences that you won’t find anywhere else, so you can experience the best of Japan’s culture, cuisine, and beauty. 
                    <br><br>Whether you’re looking for a romantic getaway, a family vacation, or solo travel we can make sure you get the most out of your time in Japan.<br><br><br>
                    Searching and planning to travel takes time. So, We carefully selected luxury accommodations, dining, traditional wellness, and unforgettable experiences for exclusive and luxury travel experiences in Japan.
                </p>
                <!-- <a href="#" class="seeMore">See More</a> -->
                <button class="btn custombtn w-25" id="moreaboutus">More About Us</button>
            </div>
            <div class="leaf-1" data-aos="fade-up-right" 
            data-aos-anchor="#example-anchor"
            data-aos-offset="1200"
            data-aos-duration="1200">
                <img src="images/leaves1.png" alt="">
            </div>
            <div class="leaf-2" data-aos="fade-down-left" data-aos-anchor="#example-anchor"
            data-aos-offset="1200"
            data-aos-duration="1200">
                <img src="images/leaves2.png" alt="">
            </div>
        </div>
            
       
    </section>
    <div class="container mt-5">
        <section id="experience">
            <h1>Experience All Seasons in Japan</h1>
            <p>From snowy winters to blooming springs, sun-soaked summers, and vibrant autumns, Japan beckons with diverse seasonal wonders.</p>
        
        </section>
    </div>
    <div class="card-container">
        <div class="card" style="width: 18rem; overflow: hidden;"
        data-aos="fade-up"
        data-aos-duration="1000">
            <div class="overlaycard card-img-top"></div>
            <img src="images/winter.png" class="card-img-top" alt="...">
            <div class="card-body"  style="overflow: hidden; z-index: 9;">

              <h5 class="card-title">Winter</h5>
              <p class="card-text">Embrace Japan's Winter Charm: Delight in snowy landscapes, onsens, and culture. Expand Your World.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; overflow: hidden;"
        data-aos="fade-up"
        data-aos-duration="800">
            <div class="overlaycard card-img-top"></div>
            <img src="images/spring.png" class="card-img-top" alt="...">
            <div class="card-body"  style="overflow: hidden; z-index: 9;">

              <h5 class="card-title">Spring</h5>
              <p class="card-text">Awaken in Japan's Spring Splendor: Cherry blossoms bloom, festivals flourish. Expand Your World.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; overflow: hidden;"
        data-aos="fade-up"
        data-aos-duration="600">
            <div class="overlaycard card-img-top"></div>
            <img src="images/summer.png" class="card-img-top" alt="...">
            <div class="card-body"  style="overflow: hidden; z-index: 9;">

              <h5 class="card-title">Summer</h5>
              <p class="card-text">Experience Family-Friendly Summer: Japan's vibrant festivals, lush nature, and captivating culture. Discover Summer Adventures.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; overflow: hidden;"
        data-aos="fade-up"
        data-aos-duration="400">
            <div class="overlaycard card-img-top"></div>
            <img src="images/autumn.png" class="card-img-top" alt="...">
            <div class="card-body"  style="overflow: hidden; z-index: 9;">

              <h5 class="card-title">Autumn</h5>
              <p class="card-text">Cherish Fall Foliage: Japan's Autumn painted in vibrant hues, offering serene beauty. Discover Autumn's Delights.</p>
            </div>
        </div>
        <a href="experience.php" class="btn custombtn mt-5" style="margin-top: 130px !important">Discover More</a>
    </div>

    <?php include 'footer.php'; ?>
    
        
    </div>
    
    <!-- Initialize Swiper -->
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



        setTimeout(function() {
            document.querySelector('.splash').classList.add('goUp')
        }, 5000);
        setTimeout(function() {
            document.querySelector('.splash').remove()
        }, 8000);

        setTimeout(function() {
            $(".titleSplash").show()
        }, 1000);
        setTimeout(function() {
            $(".subSplash").show()
        }, 2000);


        document.querySelector('#moreaboutus').addEventListener('click', function(){
            window.location.href="about.php"
        })

        

    </script>
    </body>
</html>