<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    .gradient-custom {
      /* fallback for old browsers */
      background: #6a11cb;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
  </style>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <form action="cek_login.php" method="POST">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Please enter your login and password!</p>
                  <div class="warning text-center"></div>
                  <?php 
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
            ?>
                  <div class="warning text-center" style="color: red;">
                    <?php echo "MOHON CEK USERNAME ATAU PASSWORD ANDA KEMBALI!!!"; ?>
                  </div>
                  <?php
                } else if($_GET['pesan'] == "user"){
            ?>
                  <div class="warning text-center" style="color: red;">
                    <?php echo "ANDA BUKAN ADMIN"; ?>
                  </div>
                  <?php
                } else if($_GET['pesan'] == "salah"){
            ?>
                  <div class="warning text-center" style="color: red;">
                    <?php echo "USERNAME ATAU PASSWORD TIDAK ADA,"; ?>
                    <?php echo "MOHON CEK USERNAME ATAU PASSWORD ANDA KEMBALI!!!"; ?>
                  </div>
                  <?php
                } else if($_GET['pesan'] == "kosong"){
            ?>
                  <div class="warning text-center" style="color: red;">
                    <?php echo "MOHON ISI USERNAME DAN PASSWORD ANDA!!!"; ?>
                  </div>
                  <?php
                } else if($_GET['pesan'] == "logout"){
            ?>
                  <div class="okay text-center" style="color: red;">
                    <?php echo "Anda telah berhasil logout"; ?>
                  </div>
                  <?php
                } else if($_GET['pesan'] == "belum_login"){
            ?>
                  <div class="warning text-center" style="color: red;">
                    <?php echo "ANDA HARUS LOGIN UNTUK MENGAKSES HALAMAN SELANJUTNYA"; ?>
                  </div>
                  <?php
                }
            }
            ?>

                  <br>
                  <div class="form-outline form-white mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="txt_email" />
                    <label class="form-label" for="typeEmailX">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="txt_pass" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Login</button>
                </form>


              </div>

              <div>
                <!-- <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a>
              </p> -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>