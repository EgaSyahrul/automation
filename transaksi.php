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
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li><a href="home.php">HOME</a></li>

                            <li><a href="transaksi.php" class="menu-top-active" style="color:#f7f7f7;">TRANSAKSI</a></li>
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

    <div class="below-slideshow">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="txt-block">


                        <h1 class="head-line">TRANSAKSI</h1>

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
                        <li><a href="transaksi.php" class="menu-top-active" style="color:#f7f7f7;">TRANSAKSI BELI</a></li>
                        <li><a href="transaksi_jual.php">TRANSAKSI JUAL</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div>
                <div>
                    <br>
                    <form action="cek_transaksi_beli.php" method="POST">
                        <div class="form">
                            <input type="hidden" name="tgl" id="tgl" readonly="readonly"
                                class="form-control text-center" value="<?php echo date("Y-m-d");?>"
                                style="width: 10%; position: absolute; right: 10px;">
                            <input type="hidden" name="jam" id="jam" readonly="readonly"
                                class="form-control text-center" value="<?php echo date("H:i:s");?>"
                                style="width: 10%; position: absolute; right: 170px;">
                            <input type="hidden" name="kode_transaksi" id="kode_transaksi" readonly="readonly"
                                class="form-control text-center" value="<?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT max(kode_transaksi) as kodeTerbesar FROM transaksi_beli");
                                    $data = mysqli_fetch_array($query);
                                    $kodeBarang = $data['kodeTerbesar'];
                                    $urutan = (int) substr($kodeBarang, 5, 5);
                                    $urutan++;
                                    $huruf = "TB";
                                    $kodeBarang = $huruf . sprintf("%05s", $urutan);
                                    echo $kodeBarang;
                                    if (isset($_POST['kodeTerbesar'])) {
                                        $kodeBarang=$_POST['kodeTerbesar'];
                                    }
                                    ?>" style="width: 10%; position: absolute; right: 340px;">

                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="kode">ID Sampah :</label>
                            &ensp;&ensp;&ensp;&ensp;
                            <input type="text" name="kode" id="kode" class="form" style="width: 78%;"
                                placeholder="Masukan id sampah" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Total Sampah :</label>
                            &ensp;&ensp;
                            <input type="text" name="quantity" id="quantity" class="form" style="width: 78%;"
                                placeholder="Masukan jumlah sampah per kg" required>
                        </div>
                        <br>
                            <button type="submit" class="btn btn-success" name="submit"
                            style="width: 10%; height: 40px;">TAMBAH</button>
                        <div>
                            </br>
                            <table border="1" class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="tbl text-center">No</th>
                                        <th class="tbl text-center">ID SAMPAH</th>
                                        <th class="tbl text-center">NAMA SAMPAH</th>
                                        <th class="tbl text-center">TOTAL SAMPAH</th>
                                        <th class="tbl text-center">POINT</th>
                                        <th class="tbl text-center">TOTAL</th>
                                        <th class="tbl text-center">ORDER</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                            include 'koneksi.php';
                            $sql = "SELECT * FROM laporan_beli where kode_transaksi = '$kodeBarang'";
                            $hasil = mysqli_query($koneksi,$sql);
                            $nomer = 1;
                            while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                            ?>

                                    <tr>
                                        <td class="no text-center"><?php echo $nomer++; ?></td>
                                        <td><?php echo $data['id_sampah']; ?></td>
                                        <td><?php echo $data['nama_sampah']; ?></td>
                                        <td><?php echo $data['jumlah_sampah']; ?></td>
                                        <td><?php echo $data['point'] / $data['jumlah_sampah']; ?></td>
                                        <td class="text-center">
                                            <?php echo $data['point']; ?></td>
                                        <td class="text-center">
                                            <a
                                                href="hapus_transaksi_beli.php?id_sampah=<?php echo $data['id_sampah']; ?>&quantity=<?php echo $data['jumlah_sampah']; ?>&kode_transaksi=<?php echo $data['kode_transaksi']; ?>">
                                                <input type="button" class="btn btn-danger" value="Batal"></a>
                                        </td>
                                    </tr>

                                    <?php 
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <form action="confirm_transaksi_beli.php" method="POST">
                        <div class="form">
                            <input type="hidden" name="tgl" id="tgl" readonly="readonly"
                                class="form-control text-center" value="<?php date_default_timezone_set("Asia/Jakarta"); 
                                echo date("Y-m-d");?>" style="width: 10%; position: absolute; right: 10px;">
                            <input type="hidden" name="jam" id="jam" readonly="readonly"
                                class="form-control text-center" value="<?php date_default_timezone_set("Asia/Jakarta");
                                echo date("h:i:s");?>" style="width: 10%; position: absolute; right: 170px;">
                            <input type="hidden" name="pegawai" id="pegawai" readonly="readonly"
                                class="form-control text-center" value="<?php echo $_SESSION['nama_lengkap']; ?>"
                                style="width: 10%; position: absolute; right: 170px;">
                            <input type="hidden" name="kode_transaksi" id="kode_transaksi" readonly="readonly"
                                class="form-control text-center" value="<?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT max(kode_transaksi) as kodeTerbesar FROM transaksi_beli");
                                    $data = mysqli_fetch_array($query);
                                    $kodeBarang = $data['kodeTerbesar'];
                                    $urutan = (int) substr($kodeBarang, 5, 5);
                                    $urutan++;
                                    $huruf = "TB";
                                    $kodeBarang = $huruf . sprintf("%05s", $urutan);
                                    echo $kodeBarang;
                                    if (isset($_POST['kodeTerbesar'])) {
                                        $kodeBarang=$_POST['kodeTerbesar'];
                                    }
                                    ?>" style="width: 10%; position: absolute; right: 340px;">
                            <input type="hidden" name="grand" id="grand" readonly="readonly"
                                class="form-control text-center" value="<?php
                                        include 'koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT SUM(point) as grand FROM laporan_beli WHERE kode_transaksi = '$kodeBarang'");
                                        $data = mysqli_fetch_array($query);
                                        $grand = $data['grand'];
                                        echo $grand;
                                        if (isset($_POST['grand'])) {
                                            $kodeBarang=$_POST['grand'];
                                        }
                                        ?>" style="width: 10%; position: absolute; right: 340px;">

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pelanggan">ID Pelanggan :</label>
                            &ensp;&ensp;
                            <input type="text" name="pelanggan" id="pelanggan" class="form" style="width: 78%;"
                                placeholder="Masukan id pelanggan" required>
                        </div>
                        <div class="form-group">
                        <br>
                            <button type="submit" class="btn btn-success" name="submit"
                            style="width: 10%; height: 40px;">BAYAR</button>
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