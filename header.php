<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    error_reporting(0);

?>
<style>
    *{
        color: #fff;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        font-weight: 200;
    }
    
    #headerContainer{
        position: absolute;
        right: 0;
        z-index: 999;
        top: 0;
    }
    header{
        width: 100%;
        top: 0;
        z-index: 10;
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
    #logo{
        z-index: 3;
        position: absolute;
        width: 280px;
    }
    .headerOverlay{
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000000c2;
        z-index: 1;
    }
    header nav .cart{
        float: right;
        position: relative;
        cursor: pointer;
    }
    header nav .cart i{
        font-size: 1.2rem;
    }
    header nav .cart span{
        padding: 0px 5px;
        top: -30%;
        border-radius: 5px;
        position: absolute;
        right: -50%;
        z-index: 5;
        background-color: red;
        font-size: 0.8rem;
    }
    .logoLeft{
        position: absolute;
        left: 5%;
        bottom: 20%;
        transition: .3s ease-in-out;
    }
    .displayBlock{
        display: block !important;
    }

    .offcanvas .navigation ul{
        list-style: none;
        padding: 0;
        margin-top: 250;
        display: flex;
        flex-direction: column;
        z-index: 99999 !important;
    }
    .offcanvas .navigation ul a:hover{
        background: #64A705;
        transition: .3s ease;
    }
    .offcanvas .navigation ul  a{
        text-decoration: none !important;
        color: #fff;
        padding: 20px !important;
        width: 100% !important;
        text-align: center;
        border-top: 1px solid #fff;
    }
    .offcanvas .navigation ul a:nth-child(5){
        border-bottom: 1px solid #fff;
    }
    .menubar{
        position: absolute;
        right: 0;
        font-size: 1.5rem;
        cursor: pointer;
    }
    .custombtn{
        border: 1px solid #64A705 !important;
        color: #518706 !important;
        border-radius: 3px;
        padding: 8px 20px;
    }
    .custombtn i{
        color: #518706;
    }
    .custombtn:hover{
        background-color: #518706;
        color: #fff !important;
    }
    .custombtn:hover i{
        color: #fff !important;
    }
    .customform{
        background: #fff;
        border: none;
        transition: 0.3s ease;
        border-radius: 3px;
    }
    @media only screen and (max-width: 600px){
        #headerContainer{
            width: 95% !important;
            display: block !important;
        }
        .deskHeader{
            display: none;
        }
        .menubar{
            right: 6%;
            top: -100% !important;
        }
    }
    @media only screen and (min-width: 600px){
        .deskHeader{
            display: none;
        }
        #headerContainer{
            width: 95% !important;
            display: block !important;
        }
        .menubar{
            right: 9%;
            top: -100% !important;
        }
    }
    @media only screen and (min-width: 992px){
        .deskHeader{
            display: block;
        }
        #headerContainer{
            width: 95% !important;
            display: none !important;
        }
    }
    
</style>

<?php 
    require_once 'FunctionClass.php';
    $func = new FunctionClass;
    $email = $_COOKIE['email'];
    $hideIconCart = $func->showCountHistoryItem($email) != 0 ? "display:none;" : "display:block;";
    $showAllIcon = $func->showCountHistoryItem($email) != 0 ? "display:block;" : "display:none;";
    
?>
<header class="deskHeader">
    <img src="images/logo.webp" width="100" alt="" class="logoLeft">
    <nav>
        <a href="index.php">Home</a>
        <a href="experience.php">Experience</a>
        <a href="services.php">Services</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>
        <div class="cart text-end cartIcon" style="<?php  echo $hideIconCart; ?>">
            <i class="fa-solid fa-cart-shopping">
                <span class="countItems">0</span>
            </i>
        </div>


        <div class="dropdown" style="float: right; <?php  echo $showAllIcon; ?>">
        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-regular fa-circle-user text-white"></i>
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cart.php"><i class="fa-solid fa-cart-shopping text-dark"></i> Cart <span class="countItemsTwo" style="background-color: red; padding: 1px 5px;float: right; font-size: 0.8rem;">0</span></a> </li>
            <li><a class="dropdown-item" href="history.php"><i class="fa-solid fa-clock-rotate-left text-dark"></i> History</a></li>
        </ul>
        </div>
    </nav>
</header>



<div class="container position-absolute mt-5 mb-5" style="width: 60%; display: none; z-index: 99;" id="headerContainer">
    <button type="button" data-bs-toggle="offcanvas" class="mobileToggleMenu" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"><i class="fa-solid fa-bars menubar"></i></button>
    <div class="offcanvas offcanvas-end bg-dark"  data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
            <div class="navigation">
                <ul>
                <a href="index.php">Home</a>
                <a href="experience.php">Experience</a>
                <a href="services.php">Services</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact</a>
                
                <a href="cart.php" style="border-bottom: 1px solid #fff; <?php  echo $hideIconCart; ?>">
                    <div class="cart text-center cartParent">
                        <i class="fa-solid fa-cart-shopping">
                            <span class="countItemsCart">0</span>
                        </i>
                    </div>
                </a>

                    <a style="<?php  echo $showAllIcon; ?>" href="cart.php"><i class="fa-solid fa-cart-shopping text-white"></i> Cart <span class="countItemsTwo" style="background-color: red; padding: 1px 5px;float: right; font-size: 0.8rem;">0</span></a>
                    <a style="<?php  echo $showAllIcon; ?>" href="history.php"><i class="fa-solid fa-clock-rotate-left text-white"></i> History</a>
                 
                </ul>
              </div>
      </div>
</div>


<script>
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header")
        var logo = document.querySelector(".logoLeft")
        header.classList.toggle("sticky", window.scrollY> 0)
    })

    if(localStorage.getItem('myCart') != null){
        let store = localStorage.getItem('myCart');
        var countItem = JSON.parse(store);
        document.querySelector(".countItems").innerHTML = countItem.length;
        document.querySelector(".countItemsTwo").innerHTML = countItem.length;
        document.querySelector(".countItemsCart").innerHTML = countItem.length;
    }
   

    
    
    document.querySelector(".cartIcon").addEventListener("click", function(){
        window.location.href="cart.php"
    })
    document.querySelector(".cartParent").addEventListener("click", function(){
        window.location.href="cart.php"
    })
    

</script>