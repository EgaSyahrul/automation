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

    <div class="navbar navbar-inverse set-radius-zero">
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
                <strong>Support : </strong> info@yourdomain.com
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
                            <li><a href="home.php">KEMBALI</a></li>
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


                        <h1 class="head-line">TAMBAH SAMPAH</h1>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </br></br>
                <div>
                    <form action="tambah_sampah.php" method="POST">
                        <input type="hidden" name="id_sampah" id="id_sampah" readonly="readonly"
                            class="form-control text-center" value="<?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT max(id_sampah) as kodeTerbesar FROM daftar_sampah");
                                    $data = mysqli_fetch_array($query);
                                    $idsampah = $data['kodeTerbesar'];
                                    $urutan = (int) substr($idsampah, 4, 4);
                                    $urutan++;
                                    $huruf = "SP-";
                                    $idsampah = $huruf . sprintf("%04s", $urutan);
                                    echo $idsampah;
                                    if (isset($_POST['kodeTerbesar'])) {
                                        $idsampah=$_POST['kodeTerbesar'];
                                    }
                                    ?>" style="width: 10%; position: absolute; right: 340px;">
                        <tr>
                            <div class="form-group">
                                <label for="nama">NAMA SAMPAH &ensp; :</label>
                                &ensp;
                                <input type="text" name="txt_nama" class="form" style="width: 85%;"
                                    placeholder="Masukan nama sampah, contoh: botol aqua" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis">JENIS SAMPAH &ensp;&ensp; :</label>
                                &ensp;
                                <select name="txt_jenis" id="txt_jenis" class="form" style="width: 85%;" required>
                                    <option value="">- Pilih Jenis Sampah -</option>
                                    <option value="sampah plastik">Sampah Plastik</option>
                                    <option value="sampah kaca">Sampah Kaca</option>
                                    <option value="sampah kertas">Sampah Kertas</option>
                                    <option value="sampah kayu">Sampah Kayu</option>
                                    <option value="sampah besi">Sampah Besi</option>
                                    <option value="sampah kain">Sampah Kain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">POINT &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :</label>
                                &ensp;
                                <input type="text" name="txt_point" class="form" style="width: 85%;"
                                    placeholder="Masukan point sampah, contoh: 10" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">HARGA JUAL &ensp;&ensp;&ensp; :</label>
                                &ensp;
                                <input type="text" name="txt_harga" class="form" style="width: 85%;"
                                    placeholder="Masukan harga sampah perkilo, contoh: 10000" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success" name="submit" style="margin-left: 400px; width: 10%; height: 40px;">SIMPAN</button>
                        </tr>
                    </form>

                </div>
                <br />
                <hr />
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