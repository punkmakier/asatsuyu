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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    padding: 10px;
    position: relative;
    display: flex;
}

    </style>
</head>

<?php 
    require_once 'FunctionClass.php';
    $func = new FunctionClass;

?>


    <body style="background-color: #000000;">
          
        <div style="overflow: hidden;">
            <?php include 'header.php'; ?>
            <div class="header-content">
                <h1 style="z-index: 2;">History</h1>
                <div class="overlay"></div>
            </div>
            <br><br><br><br>
            <div class="container">
                <?php 
                    $func->showHistoryDetails($_COOKIE['email']);
                
                ?>
            </div>
            
            
        </div>



            <br><br><br><br><br><br><br><br><br>
            <?php include 'footer.php'; ?>


    </body>
</html>