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
    <link href="assets/css/style_copy.css" rel="stylesheet" />
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

                    <img src="assets/img/portfolio/logo1.png" />
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
                            <li><a href="about.php" class="menu-top-active" style="color:#f7f7f7;">ABOUT US</a></li>
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

              <img src="assets/img/Jacin.jpg" alt="" class="img-circle set-about-img"  />
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
                                        Bank Sampah adalah sebuah lembaga yang bergerak di bidang bisnis pengelolaan sampah. Alur kerja bank sampah meliputi proses pengumpulan sampah yang sudah dipisahkan berdasarkan jenisnya sampai proses distribusi ke pabrik daur ulang atau pencacah sampah. Aktivitas utama bank sampah yaitu meliputi prosedur pengelolaan sampah terpilah, transaksi dan administrasi. Agar dapat menyetorkan sampah ke bank sampah terdapat sejumlah metode penyetoran sampah oleh nasabah/customer yang dapat dipilih, diantaranyya setor sampah langsung dan permintaan jemput sampah. Proses administrasi bisnis bank sampah saat ini masih dilakukan secara manual dan menyebabkan beberapa masalah seperti pendataan administrasi yang tercatat tidak rapi, terjadi hilang data/duplikasi, customer tidak dapat akses informasi perubahan jadwal penjemputan sampah dan informasis riwayat transaksi.
Untuk mengatasi masalah ini, maka diperlukan sebuah aplikasi yang dapat digunakan untuk melakukan transaksi pengelolaan di bank sampah. Untuk itu kami membuat sebuah aplikasi bank sampah dengan nama Rushbin. Rushbin adalah sebuah apikasi bank sampah yang bertujuan untuk membantu pengelola bank sampah dan masyarakat untuk melakukan transaksi dan administrasi. Nantinya dengan aplikasi ini masyarakat/customer dapat meminta penjemputan sampah, selanjutnya sampah akan diambil oleh pihak bank sampah dan akan di hitung beratnya. Dari hasil penghitungan berat tersebut customer akan mendapatkan poin, yang nantinya poin yang telah terkumpul tersebut dapat ditukarkan dengan uang. Poin yang akan ditukarkan harus memenuhi jumlah minimum untuk dapat melakukan penukaran poin.
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
                <a href="https://wa.me/6282331879753">
                    <h4>WHATSAPP: 082331879753 </h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">
                <h3> <strong>SOCIAL MEDIA</strong> </h3>
                <br />
                <a href="https://www.facebook.com/search/top/?q=rushbin%20bank%20sampah/">
                    <h4>FACEBOOK </h4>
                </a>
                <a href="http://www.twitter.com/">
                    <h4>TWITTER </h4>
                </a>
                <a href="https://www.instagram.com/rushbinenterprise/">
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
    <!-- jquery -->
    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <!-- jquery datatable -->
    <script type="text/javascript" charset="utf8" src="assets/js/datatabel/media/js/jquery.dataTables.js">
    </script>
</body>

</html>