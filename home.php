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
                <strong>Support : </strong> tRushMeBin@gmail.com
            </div>

        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a href="home.php" class="menu-top-active" style="color:#f7f7f7;">HOME</a></li>

                            <li><a href="transaksi.php">TRANSAKSI</a></li>
                            <li><a href="laporan.php">LAPORAN</a></li>
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
    <div id="slideshow-sec">
        <div id="carousel-div" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">

                    <img src="assets/img/bt1.jpg" alt="" />
                    <div class="carousel-caption">
                        <h1 class="wow slideInLeft" data-wow-duration="2s">WELCOM TO RUSHBIN</h1>
                        <h2 class="wow slideInRight" data-wow-duration="2s">HELLO ADMIN:
                            <?php echo $_SESSION['nama_lengkap']; ?></h2>
                    </div>

                </div>
                <div class="item">
                    <img src="assets/img/pm1.jpg" alt="" />
                    <div class="carousel-caption">
                        <h1 class="wow slideInLeft" data-wow-duration="2s">AWESOME APLICATION FOR BANK SAMPAH</h1>
                        <h2 class="wow slideInRight" data-wow-duration="2s">COMPLETELY FREE</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/g.gif" alt="" />
                    <div class="carousel-caption">
                        <h1 class="wow slideInLeft" data-wow-duration="2s">SO WHAT ARE YOU WAITING FOR</h1>
                        <h2 class="wow slideInRight" data-wow-duration="2s">COME AND JOIN US</h2>
                    </div>

                </div>
            </div>
            <!--INDICATORS-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-div" data-slide-to="1"></li>
                <li data-target="#carousel-div" data-slide-to="2"></li>
            </ol>
            <!--PREVIUS-NEXT BUTTONS-->
            <a class="left carousel-control" href="#carousel-div" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-div" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <!-- SLIDESHOW SECTION END-->
    <div class="below-slideshow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="txt-block">
                        <h1 class="head-line">Daftar Sampah</h1>
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
                <div class="warning text-center"></div>
                <?php 
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "edit-succesfull") {
                ?>
                <div class="warning text-center" style="color: green; font-weight: 900;">
                    <?php echo "DATA BERHASIL DI EDIT!!!"; ?>
                </div>
                <?php
                    } else if($_GET['pesan'] == "add-succesfull"){
                ?>
                <div class="warning text-center" style="color: green; font-weight: 900;">
                    <?php echo "DATA BERHASIL DI TAMBAH!!!"; ?>
                </div>
                <?php
                    } else if($_GET['pesan'] == "hapus-succesfull"){
                        ?>
                <div class="warning text-center" style="color: red; font-weight: 900;">
                    <?php echo "DATA BERHASIL DI HAPUS!!!"; ?>
                </div>
                <?php
                    }
                }
                ?>
                </br>
                <div>
                    <ul id="menu-top" class="nav navbar-nav navbar-left">
                        <li><a  class="menu-top-active" style="color:#f7f7f7;" href="detail_tambah_sampah.php">TAMBAH</a></li>
                    </ul>
                </div>
                </br>
                <table border="1" class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="tbl text-center">No</th>
                            <th class="tbl text-center">ID SAMPAH</th>
                            <th class="tbl text-center">NAMA SAMPAH</th>
                            <th class="tbl text-center">JENIS SAMPAH</th>
                            <th class="tbl text-center">JUMLAH SAMPAH</th>
                            <th class="tbl text-center">POINT PER KG</th>
                            <th class="tbl text-center">HARGA PER KG</th>
                            <th class="tbl text-center">ORDER</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM daftar_sampah";
                    $hasil = mysqli_query($koneksi,$sql);
                    $nomer = 1;
                    while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                    ?>

                        <tr>
                            <td class="no text-center"><?php echo $nomer++; ?></td>
                            <td><?php echo $data['id_sampah']; ?></td>
                            <td><?php echo $data['nama_sampah']; ?></td>
                            <td><?php echo $data['jenis_sampah']; ?></td>
                            <td class="jumlah text-center"><?php echo $data['jumlah_sampah']; ?></td>
                            <td class="jumlah text-center"><?php echo $data['point']; ?></td>
                            <td><?php echo $data['harga_jual']; ?></td>
                            <td class="text-center">
                                <a href="detail_sampah.php?id_sampah=<?php echo $data['id_sampah']; ?>">
                                    <input type="button" class="btn btn-primary" value="Edit" style="width: 40%;"></a>
                                <a href="hapus_home.php?id_sampah=<?php echo $data['id_sampah']; ?>">
                                    <input type="button" class="btn btn-danger" value="Hapus" style="width: 40%;"></a>
                            </td>
                        </tr>

                        <?php 
                    }
                    ?>
                    </tbody>
                </table>
                <br />
                <hr />
            </div>
        </div>
    </div>
    <!-- TAG HOME SECTION END-->
    <div class="container ">
        <div class="row">
            <div
                class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-12 set-div">
                <div class="just-txt-div text-center">
                    <h3><strong>-- Download Aplikasi Mobile rushbin --</strong> </h3>
                    <p>
                        Rushbin merupakan aplikasi berbasis mobile untuk membantu warga dalam melakukan transaksi jual
                        sampah bekas yang dapat di daur ulang
                        <br /><br />
                    </p>
                    <a class="btn btn-info btn-lg" href="about.php">Info Lebih lanjut</a>
                    &nbsp;&nbsp;
                    <a class="btn btn-success btn-lg" href="http://www.youtube.com/">Download Aplikasi</a>
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