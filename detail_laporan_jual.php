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
<strong>Support : </strong>  info@yourdomain.com
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
                            <li><a href="laporan_jual.php">KEMBALI</a></li>
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

              
									<h1 class="head-line"> DETAIL LAPORAN TRANSAKSI PEMBELIAN</h1>
									
                      </div>
            </div>
        </div>

    </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
    <div class="container">
        <div class="row">
            <div>
                  </br></br>
                    <table border="1" class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="tbl text-center">No</th>
                                    <th class="tbl text-center">KODE TRANSAKSI</th>
                                    <th class="tbl text-center">NAMA SAMPAH</th>
                                    <th class="tbl text-center">JUMLAH SAMPAH</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            include 'koneksi.php';
                            $data = $_GET['kode_transaksi'];
                            $sql = "SELECT * FROM laporan_jual where kode_transaksi = '$data'";
                            $hasil = mysqli_query($koneksi,$sql);
                            $nomer = 1;
                            while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                            ?>
                            
                            <tr>
                                <td class="no text-center"><?php echo $nomer++; ?></td>
                                <td><?php echo $data['kode_transaksi']; ?></td>
                                <td><?php echo $data['nama_sampah']; ?></td>
                                <td><?php echo $data['jumlah_sampah']; ?></td>
                            </tr>
                            
                            <?php 
                            }
                            ?>
                            </tbody>
                        </table>
                        </br></br><hr>
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
