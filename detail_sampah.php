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

    <div class="navbar navbar-inverse set-radius-zero">
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


                        <h1 class="head-line"> DETAIL INFORMASI SAMPAH</h1>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </br>
                <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "kosong") {
            ?>
                <div class="warning text-center">
                    <?php echo "LU CHEATER YA!!!!"; ?>
                </div>
                <?php
                } 
            }
            ?>
                </br></br>
                <div>
                    <form action="edit_detail_sampah.php" method="POST">

                        <?php
                require ('koneksi.php');
                $data = $_GET['id_sampah'];
                $sql = "SELECT * FROM daftar_sampah WHERE id_sampah = '$data'";
                    $hasil = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                    ?>

                        <tr>
                            <div class="form-group">
                                <label for="kode">ID SAMPAH &ensp;&ensp;&ensp;&ensp; :</label>
                                &ensp;
                                <input type="text" readonly="readonly" name="txt_id" class="form" style="width: 85%;"
                                    value="<?php echo $data['id_sampah']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="nama">NAMA SAMPAH &ensp; :</label>
                                &ensp;
                                <input type="text" name="txt_nama" class="form" style="width: 85%;"
                                    placeholder="Masukan nama sampah, contoh: <?php echo $data['nama_sampah']; ?>"
                                    required value="<?php echo $data['nama_sampah']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jenis">JENIS SAMPAH &ensp; :</label>
                                &ensp;
                                <select name="txt_jenis" id="txt_jenis" class="form" style="width: 85%;" required>
                                    <option value="<?php echo $data['jenis_sampah']; ?>">
                                        <?php echo $data['jenis_sampah']; ?></option>
                                    <option value="sampah plastik">Sampah Plastik</option>
                                    <option value="sampah kaca">Sampah Kaca</option>
                                    <option value="sampah kertas">Sampah Kertas</option>
                                    <option value="sampah kayu">Sampah Kayu</option>
                                    <option value="sampah besi">Sampah Besi</option>
                                    <option value="sampah kain">Sampah Kain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="point">POINT &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :</label>
                                &ensp;
                                <input type="text" name="txt_point" class="form" style="width: 85%;"
                                    placeholder="Masukan point sampah, contoh: <?php echo $data['point']; ?>" required
                                    value="<?php echo $data['point']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga">HARGA JUAL &ensp;&ensp;&ensp; :</label>
                                &ensp;
                                <input type="text" name="txt_harga" class="form" style="width: 85%;"
                                    placeholder="Masukan harga sampah perkilo, contoh: <?php echo $data['harga_jual']; ?>"
                                    required value="<?php echo $data['harga_jual']; ?>">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success" name="submit" style="margin-left: 400px; width: 10%; height: 40px;">SIMPAN</button>
                        </tr>

                        <?php 
                    }
                ?>

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