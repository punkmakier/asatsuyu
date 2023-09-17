<style>
    
    footer{
        width: 60%;
        margin: 0 auto;
        margin-top: 300px;
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
    @media only screen and (max-width: 600px){

        footer .newsletter{
            width: 90%;
            margin-top: 50px;
        }
        footer nav a{
            margin: 10px;
        }
        footer{
            width: 90% !important;
        }
        footer li{
            margin: 10px 15px;
        }
    }

    @media only screen and (min-width: 600px){
        footer nav a{
            margin: 10px;
        }
        footer{
            width: 90% !important;
        }
        footer li{
            margin: 10px 15px;
        }
        footer .newsletter{
            width: 80%;
            margin-top: 50px;
        }
    }
    @media only screen and (min-width: 768px){
        footer .newsletter{
            width: 60%;
            margin-top: 50px;
        }
    }
    @media only screen and (min-width: 992px){
        footer .newsletter{
            width: 50%;
            margin-top: 50px;
        }
    }
    @media only screen and (min-width: 1200px){
        footer .newsletter{
            width: 30%;
            margin-top: 50px;
        }
    }
</style>


<footer>
    <img src="images/logo.webp" class="d-block mx-auto mb-5" width="280" alt="">
    <h2>ASATSUYU</h2>
    <h5>LUXURY JAPAN TRAVEL</h4><br>
    <form id="subscribeForm">

    <div class="newsletter">
        <div class="row">
                <span style="font-weight: 600; font-size: 18px;">Discover more about Japan</span><br><br>
                <div class="col-8"><input type="text" name="typeemail" class="form-control customform" placeholder="Enter your email for newsletter..."></div>
                <div class="col-4"><button type="button" class="btn custombtn w-100 subscribeBtn">Subscribe</button></div>
        </div>
    </div><br><br><br>
            </form>
    <h5>Follow Us</h5><br><br>
    <ul>
        <li><a href="https://www.facebook.com/AsatsuyuJapanLuxuryTravel"><i class="fa-brands fa-facebook" style="color: #4267b2;"></i></a></li>
        <li><a href="https://www.instagram.com/asatsuyu.japan.luxury.travel/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" width="30" alt=""></a></li>
        <li><a href="https://twitter.com/AsatsuyuTravel"><i class="fa-brands fa-square-twitter" style="color: #1da1f2;"></i></a></li>
        <li><a href=""><i class="fa-brands fa-telegram" style="color: #0088cc;"></i></a></li>
        <li><a href=""><i class="fa-brands fa-square-whatsapp" style="color: #25d366;"></i></a></li>
    </ul>
    <br><br>
    <p style="font-size: 0.9rem; margin-top: 50px;">Copyright @ 2023 - All Rights Reserved by Asatsuyu Japan Travel. <a href="terms-and-condition.php" style="color: #fff;">Terms & Condition</a> | <a href="privacy-policy.php" style="color: #fff;">Privacy Policy</a></p>
    <br><br>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>


<script>
    $(".subscribeBtn").click(function(){
        var formData = $("#subscribeForm").serialize()+"&Subscribe=Subscribe";
        $.ajax({
            type: "POST",
            url: "subscribe.php",
            data: formData,
            success: function(res){
                if(res == "Success"){
                    Swal.fire(
                        'Success',
                        'Thank you for subscribing. You will be notified every time we have update.',
                        'success'
                    )
                    $("#subscribeForm")[0].reset();
                }
                
            }
        })
    })
    
</script>