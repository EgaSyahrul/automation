<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Rushbin - BankSampah.apk</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style copy.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
</head>
<body>

<?php 
session_start();
if ($_SESSION['status']!="login") {
    header("location:index.php?pesan=belum_login");
}
?>

 <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">

                    <img src="assets/img/portfolio/logo.png" />
                </a>

            </div>
            <div class="right-div">
<strong>Support : </strong>  tRushMeBin@gmail.com
            </div>
          
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                     <div class="navbar-collapse collapse ">
                     <ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a href="home.php">HOME</a></li>
                           
                            <li><a href="transaksi.php">TRANSAKSI</a></li>
                            <li><a href="laporan.php">LAPORAN</a></li>
                            <li><a href="pickup.php">PICKUP</a></li>
                            <li><a href="customer.php">INFORMASI CUSTOMER</a></li>
                            <li><a href="about.php" class="menu-top-active">ABOUT US</a></li>
                            <li><a href="logout.php">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
  
    <div class="below-slideshow">
         <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="txt-block">

              
									<h1 class="head-line">Who We ARE</h1>
									
                      </div>
            </div>
        </div>

    </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h1 class="tag-home">  <strong>Rushbin</strong> merupakan aplikasi bank sampah, untuk <strong>membantu masyarakat</strong> untuk mendapatkan <strong>tambahan penghasilan</strong>, dengan cara mengumpulkan <strong>sampah anorganik</strong>, untuk ditukarkan dengan point, dan setelah cukup terkumpul, point dapat ditukarkan dengan <strong>uang</strong>.</h1> 
               <hr />
                 </div>
            </div>
          </div>
     <!-- TAG HOME SECTION END-->
    <div class="just-sec">
        

        <div class="container">
             
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="just-txt-div text-center">

              <img src="assets/img/gigih.jpg" alt="" class="img-circle set-about-img"  />
									<h2><strong>GIGIH SI PEMIMPIN </strong>  </h2>
									<p >
                                        Gigih Dwi Cahyo pemimpin kami, merupakan orang yang berkemauan keras dan dapat diandalkan.
                                        Dari situlah proyek kami dapat berjalan dan selesai tepat waktu tampa hambatan
									</p>
                   
                      </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="just-txt-div text-center">

              <img src="assets/img/adit.jpg" alt="" class="img-circle set-about-img"  />
									<h2><strong>ADIT SI ANALIS </strong>  </h2>
									<p >
                                        Yunan Aditya Primawardana, orang yang berjasa dan berperan aktif dalam pembuatan proyek kami.
                                        Tampanya mungkin proyek ini tak akan ada di depan mata anda saat ini
									</p>
                   
                      </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="just-txt-div text-center">

              <img src="assets/img/jacin.jpg" alt="" class="img-circle set-about-img"  />
									<h2><strong>JACIN SI PENULIS </strong>  </h2>
									<p >
                                        Jacinda Olga Nabila merupakan seorang pemegang peran kunci dalam proyek ini. Meskipun hanya bekerja
                                        di balik layar namun tampanya mungkin proyek ini hanya akan ide yang di keluarkan disiang bolong
									</p>
                   
                      </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="just-txt-div text-center">

              <img src="assets/img/ega.png" alt="" class="img-circle set-about-img"  />
									<h2><strong>EGA SI PENGODING </strong>  </h2>
									<p >
                                        Ega Syahrul Ramadhanto merupakan seorang pemimpi yang akan mewujudkan semua mimpinya menjadi kenyataan.
                                        Meskipun halangan melintang, kekurangan menghalangi, ataupun kenyataan tak seindah yang dibayangkan, dia tidak pernah menyerah
									</p>
                   
                      </div>
            </div>
        </div>
             <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-46 col-xs-12">
                <div class="just-txt-div">

									<p >
										<strong>RUSHBIN ETERPRISE</strong> merupakan perusahan yang bergerak di bidang lingkungan hidup.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur <strong> consectetur adipiscing elit.</strong>  felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
									</p>
                    <p >
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur <strong> consectetur adipiscing elit.</strong>  felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
									</p>
                   
                      </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-46 col-xs-12">
                 <div class="just-txt-div">
                     <img src="assets/img/side1.png" class="img-responsive" />
                
                     </div>
            </div>
        </div>
    </div>
    </div>
    <!--JUST SECTION END-->

<div class="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">
                <h3> <strong>CONTACT PERSON</strong> </h3>
                <br />
                <a href="http://www.whatsapp.com/">
                    <h4>WHATSAPP: 082331879753 </h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">
                <h3> <strong>SOCIAL MEDIA</strong> </h3>
                <br />
                <a href="http://www.facebook.com/">
                    <h4>FACEBOOK </h4>
                </a>
                <a href="http://www.twitter.com/">
                    <h4>TWITTER </h4>
                </a>
                <a href="http://www.instagram.com/">
                    <h4>INSTAGRAM </h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h3> <strong>ALAMAT KANTOR</strong> </h3>
                <br />
                <h4>Jalan Menuju Kenangan indah no.33,</h4>
                <h4>Talangsari, JEMBER,</h4>
                <h4>INDONESIA</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <hr />
                <div style="text-align:right;padding:5px;">
                    &copy;2014 yourdomain.com | <a href="http://www.binarytheme.com/" style="color:#fff;"
                        target="_blank">Designed By: Binarytheme.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FOOTER SECTION END-->
<!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->
<!--CORE SCRIPTS PLUGIN-->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<!--BOOTSTRAP SCRIPTS PLUGIN-->
<script src="assets/js/bootstrap.js"></script>
<!--WOW SCRIPTS PLUGIN-->
<script src="assets/js/wow.js"></script>
<!--FLEXSLIDER SCRIPTS PLUGIN-->
<script src="assets/js/jquery.flexslider.js"></script>
<!--CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
