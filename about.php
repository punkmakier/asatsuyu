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
            background-color: rgba(0, 0, 0, 0.596);
            position: absolute;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 1;

        }
        .overlay{
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
    width: 65vw;
    margin: 0 auto;
    margin-top: 80px !important;
}
.description ul li{
    margin-top: 20px;
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
}
.content-container p{
    width: 70%;
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



.tripto{
    width: 50%;
    margin: 150px auto;
    margin-bottom: 350px !important;
}
.tripto img{
    margin-right: 60px;
}
.tripto p{
    width: 70%;
}
.header-about{
    width: 60%;
    margin: 0 auto;
    height: 100vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

 .bmimage{
    position: absolute;
    top: 0;
    right: 0;
    z-index: -5;

}
.bmimage img{
    width: 800px;
}
.header-about .main{
    width: 80%;
}

.whyus{
    width: 70%;
    margin: 0 auto;
    margin-bottom: 450px;
}
.whyus p{
    width: 85%;
}
.whyus h5{
    color: #518706;
}
.header-about img{
    position: absolute;
    right: 10%;
    top: 30%;

}
.underline{
    width: 70%;
    height: 1.5px;
    background-color: #fff;
    margin-bottom: 50px;
}









@media only screen and (max-width: 992px){
    .header-about{
        width: 100%;
        flex-direction: column;
        text-align: center;
    }
    .header-about .main{
        margin-top: 80px;
    }
    .header-about img{
        right: 15%;
        top: 30%;
    }
    #overlayid{
        display: block !important;
    }

    .tripto{
        width: 100% !important;
    }
    .main-content{
        flex-direction: column;
        width: 100vw !important;
        text-align: center;
    }

    .main-content .image-container{
        width: 100% !important;
    }
    .main-content .image-container img{
        width: 380px !important;
        margin: 0 auto;
    }
    .tripto h5,.tripto h6,.tripto p{
        text-align: center !important;
    }
    .custom-btn{
        margin: 0 auto !important;
    }
    .tripto p{
        width: 100% !important;
    }
    .underline{
        width: 100% !important;
    }

    .whyus{
        width: 85% !important;
        text-align: center;
    }
    .whyus p{
        width: 100% !important;
    }
    #readyto{
        text-align: center !important;
    }


}





    </style>
</head>




    <body style="background-color: #000000;">
          
        <div style="overflow: hidden;">
        <?php include 'header.php'; ?>

            <div  class="header-about" >

                <div data-aos="fade-up" data-aos-duration="1500" class="main" style="z-index: 5;" >

                    <h1 style="color: #518706;">About Us</h1><br>
                    <h4>Asatsuyu means "Morning Dew" in Japanese.</h4><br><br>
                    <p>
                        Asatsuyu 朝露｜Japan Luxury Travel is a boutique travel advisory company. Specializes in curating unique and bespoke luxury travel experiences in Japan
                        no matter which season you choose to visit.<br>
                        <br>
                        We offer our professional expertise to our clients and offer more in-depth knowledge about unforgettable experiences and amazing destinations in Japan.<br><br>
                        We offer our professional expertise to our clients and offer more in-depth knowledge about unforgettable experiences and amazing destinations in Japan.<br><br>
                    </p>
                    
                </div>
                <div class="overlay" style="height: 110vh !important; z-index: 1; display: none;" id="overlayid"></div>
                <img src="images/logo.webp" alt="" width="320">
                        
            </div>
            <div class="bmimage">
                    <img src="images/aboutleave.png" alt="" class="bgimage">


            </div>


            <div class="header-content">
                <h1 style="z-index: 9;">Asatsuyu 朝露</h1>
                <p style="z-index: 9;">means “Morning Dew” in Japanese</p>
                <div class="overlay"></div>
            </div>

            <div class="tripto" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-center" style="color: #518706;">Meet Our Founder</h1><br><br><br><br>
                <section class="main-content" style="background-color: #000 !important;">
                    <div class="image-container" data-aos="fade-right" data-aos-duration="1500">
                        <img src="images/founder.webp" alt="" width="500" style="margin-top: 50px;">
                    </div>
                    <div class="text-start" style="padding: 30px">
                        <h5 style="color: #fff !important;">Clariss Ordoñez</h5><br>
                        <div class="underline"></div>
                        <p style="font-weight: 200;">
                            She worked for almost a decade in the tourism industry, and luxury hotels and lived in different parts of Japan after she attained a bachelor's degree in Travel & Tourism Management. The language barrier is one hindrance to fully enjoy when you are traveling in a non-English speaking country this inspired her to help people who would like to experience traveling in Japan whether to see beautiful cherry blossoms, autumn season, or celebrate a special occasion in an endless discovery country of Japan. 
                        </p><br><br>
                        <p>
                            " Being an expert in the travel industry is how you passed through challenges living in a non-English speaking country, how you managed and adapted the culture, traditions, customs, and etiquettes of a country. This is a real international experience. Asatsuyu means "Morning Dew" in Japanese. I encourage all of our clients to wake up very early morning. Never miss the asatsuyu. It is beautiful...It is good to feel..."
                        </p>
                    </div>
                </section>
            </div>

            <div class="whyus" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-center mb-5" style="color: #518706">Why Us ?</h1><br>
                <div class="mountfuji text-center mb-5">
                    <img src="images/mountfuj.png" alt="" width="350">
                </div>
                <div class="row" style="width: 100%;" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-sm col-md mb-3">
                        <h5>Customized Itinerary</h2><br>
                        <p>A travel advisor will create a fully customized itinerary from scratch based on your budget, interests, and preferences. This means that your itinerary will be unique and tailored just for you. You won't be limited to a pre-packaged tour or a set list of activities. In comparison, travel agents often rely on reselling packaged tour products created by tour operators with a list of activities that may not align with your personal preferences. You may end up spending your time doing activities that you're not interested in, simply because that's what the travel agent has available.</p>
                    </div>
                    <div class="col-sm col-md mb-3">
                        <h5>Hassle-Free</h2><br>
                        <p>Travel advisor is the advanced version of the travel agent.Travel agents may book a flight ticket, book a hotel, and set up transfers only while we support our clients in case they encounter a language barrier during their holiday. A travel advisor can take the hassle out of planning your trip.</p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-sm col-md mb-3 mt-4">
                        <h5>Expertise and knowledge</h2><br>
                        <p>Provide expert knowledge and advice to help you plan the perfect vacation.  We can advise you on the best options for where to go and what is interesting to do. A lot of the best hotels are ones you have likely never heard of. This is where a travel advisor’s knowledge cannot be beat.</p>
                    </div>
                    <div class="col-sm col-md mb-3">
                        <h5>Save your time and reduce your stress</h2><br>
                        <p>Travel Advisor will save you time, and money, and reduce your stress especially when a client is planning to travel to a non-English-speaking country.  There are many accommodation choices in Japan, restaurants, and endless places to discover. A travel advisor can clear the clutter and help you save your time as planning a trip is a time-consuming process and people often have difficulty finding time to plan the trip.</p>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-sm col-md mb-3">
                        <h5>Connections</h2><br>
                        <p>Travel advisors use personal contacts to make reservations that aren’t available online or through typical booking systems.</p>
                    </div>
                    <div class="col-sm col-md"></div>
                </div>
            </div>
               


            <div class="tripto" data-aos="fade-up" data-aos-duration="2000">
                <section class="main-content" style="background-color: #000 !important;">
                    <div class="image-container" data-aos="fade-right" data-aos-duration="2000">
                        <img src="images/triptojapan_1.png" alt="" width="400" class="mt-5">
                    </div>
                    <div class="text-start" style="padding: 30px" id="readyto">
                        <h5 style="color: #518706 !important;">Ready for your trip to Japan?</h5>
                        <h6>Let us help you plan everything.</h6><br><br>
                        <p>
                            Every itinerary we design is tailored exclusively for you. Our goal is to craft a one-of-a-kind experience that aligns perfectly with your preferences and desires. To discover more about our personalized offerings, reach out to one of our expert travel advisors.
                        </p><br><br>
                        <a href="contact.php" class="btn custombtn text-white ps-5 pe-5">Click here for the inquiry form</a>
                    </div>
                </section>
            </div>

            <?php include 'footer.php'; ?>


        </div>


        <script>
            AOS.init();
        </script>
    </body>
</html>