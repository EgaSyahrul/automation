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
                            <li><a href="customer.php">KEMBALI</a></li>
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

              
									<h1 class="head-line"> DETAIL INFORMASI CUSTOMER</h1>
									
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
                    <form action="edit_detail_customer.php" method="POST">
                
                <?php
                require ('koneksi.php');
                $data = $_GET['id_pengguna'];
                $sql = "SELECT * FROM `pengguna` WHERE id_pengguna = '$data'";
                    $hasil = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                    ?>
                    
                    <tr>
                        <div class="form-group">
                            <label for="kode">ID PENGGUNA &ensp; :</label>
                            &ensp;
                            <input type="text" readonly="readonly" name ="kode" class="form" style="width: 85%;" 
                            value="<?php echo $data['id_pengguna']; ?>" required/>
                            <input type="hidden" name ="txt_kode" class="form" style="width: 1%;" 
                            value="<?php echo $data['id_pengguna']; ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA LENGKAP  :</label>
                            &ensp;
                            <input type="text" name ="txt_nama" class="form" style="width: 85%;" 
                            placeholder="Masukan nama lengkap, contoh: <?php echo $data['nama_lengkap']; ?>" required
                            value="<?php echo $data['nama_lengkap']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="telepon">NO HP &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :</label>
                            &ensp;
                            <input type="text" name ="txt_telepon" class=" form"style="width: 85%;" 
                            placeholder="Masukan nomer yang bisa dihubungi, contoh: 081*****" required
                            value="<?php echo $data['telepon']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="alamat1">ALAMAT 1 &ensp;&ensp;&ensp;&ensp; :</label>
                            &ensp;
                            <input type="text" name ="txt_alamat1" class="form" style="width: 85%;" 
                            placeholder="Masukan alamat anda, contoh: <?php echo $data['alamat1']; ?>" required
                            value="<?php echo $data['alamat1']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="alamat2">ALAMAT 2 &ensp;&ensp;&ensp;&ensp; :</label>
                            &ensp;
                            <input type="text" name ="txt_alamat2" class="form" style="width: 85%;" 
                            placeholder="OPTIONAL Masukan alamat anda, contoh: <?php echo $data['alamat2']; ?>"
                            value="<?php echo $data['alamat2']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="alamat3">ALAMAT 3 &ensp;&ensp;&ensp;&ensp; :</label>
                            &ensp;
                            <input type="text" name ="txt_alamat3" class="form" style="width: 85%;" 
                            placeholder="OPTIONAL Masukan alamat anda, contoh: <?php echo $data['alamat3']; ?>" required
                            value="<?php echo $data['alamat3']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :</label>
                            &ensp;
                            <input type="text" name ="email" class="form" style="width: 85%;"
                            readonly="readonly" required value="<?php echo $data['username']; ?>" >
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success" name="submit" style="margin-left: 400px; width: 10%; height: 40px;">SIMPAN</button>
                    </tr>
                    
                    <?php 
                    }
                ?>
                
                    </form>
                
                </div>
                <br /><hr />
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