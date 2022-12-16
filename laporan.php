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
    <!-- datatable style -->
    <link rel="stylesheet" type="text/css" href="assets/js/datatabel/media/css/jquery.dataTables.css">

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
                <strong>Support : </strong> tRushMeBin@gmail.com
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
                            <li><a href="laporan.php" class="menu-top-active">LAPORAN</a></li>
                            <li><a href="pickup.php">PICKUP</a></li>
                            <li><a href="customer.php">INFORMASI CUSTOMER</a></li>
                            <li><a href="about.php">ABOUT US</a></li>
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


                        <h1 class="head-line">LAPORAN</h1>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->

    <div class="container">
        <div class="row">
            <div class="col-md-9" style="width: 100%;">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-left">
                        <li><a href="laporan.php" class="menu-top-active">LAPORAN BELI</a></li>
                        <li><a href="laporan_jual.php">LAPORAN JUAL</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div>
                <div>
                    <form method="post">
                        <div>
                            </br><br><br>
                            <div class="form-group">
                                <label for="sebelum">Dari Tanggal :</label> &ensp;
                                <input type="date" name="sebelum" id="sebelum" class="form" style="width: 35%;"
                                    required>
                                &ensp;&ensp;
                                <label for="sesudah"> Sampai tanggal :</label> &ensp;
                                <input type="date" name="sesudah" id="sesudah" class="form" style="width: 35%;"
                                    required>
                                &ensp;&ensp;
                                <input type="submit" class="btn btn-primary" name="filter" value="cari"
                                    style="width: 5%; height: 40px; font-weight: 900;">
                            </div>
                            </br></br>
                            <table border="1" class="display" id="table2" style="width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="tbl text-center">No</th>
                                        <th class="tbl text-center">KODE TRANSAKSI</th>
                                        <th class="tbl text-center">TANGGAL</th>
                                        <th class="tbl text-center">WAKTU</th>
                                        <th class="tbl text-center">NAMA PEGAWAI</th>
                                        <th class="tbl text-center">ID PELANGGAN</th>
                                        <th class="tbl text-center">TOTAL POINT</th>
                                        <th class="tbl text-center">ORDER</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                            include 'koneksi.php';
                            $nomer = 1;
                            if (isset($_POST['filter'])) {
                                $sebelum = $_POST['sebelum'];
                                $sesudah = $_POST['sesudah'];
                                $sql = "SELECT * FROM transaksi_beli WHERE tanggal BETWEEN '$sebelum' AND '$sesudah' ORDER BY kode_transaksi DESC";
                            } else {
                                $sql = "SELECT * FROM transaksi_beli ORDER BY kode_transaksi DESC";
                            }
                            $hasil = mysqli_query($koneksi,$sql);
                            while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                            ?>

                                    <tr>
                                        <td class="no text-center"><?php echo $nomer++; ?></td>
                                        <td><?php echo $data['kode_transaksi']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td><?php echo $data['waktu']; ?></td>
                                        <td><?php echo $data['nama_lengkap']; ?></td>
                                        <td><?php echo $data['id_pengguna']; ?></td>
                                        <td class="text_center"><?php echo $data['total_point']; ?></td>
                                        <td class="text-center">
                                            <a
                                                href="detail_laporan_beli.php?kode_transaksi=<?php echo $data['kode_transaksi']; ?>">
                                                <input type="button" class="btn btn-info btn-lg" value="Detail"></a>
                                        </td>
                                    </tr>

                                    <?php 
                            }
                            ?>
                                </tbody>
                            </table>
                            </br></br>
                            <hr>
                        </div>
                    </form>
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
    <!-- jquery -->
    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <!-- jquery datatable -->
    <script type="text/javascript" charset="utf8" src="assets/js/datatabel/media/js/jquery.dataTables.js">
    </script>

    <!-- fungsi datatable -->
    <script>
        $(document).ready(function () {
            $('#table1').DataTable({
                "pagingType": "full_numbers",
                "info": false
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#table2').DataTable({
                "pagingType": "full_numbers",
                "info": false
            });
        });
    </script>
</body>

</html>