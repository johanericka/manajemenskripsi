<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/uinlogo.png" rel="icon">
  <title>Manajemen SKRIPSI</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <?php
  require('config.php');
  require('vendor/myfunc.php');
  ?>
</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="img/uinlogo.png" width="10%" class="img-fluid">
                    <h1 class="h4 text-gray-900 mb-4">Daftar Akun Pengguna</h1>
                  </div>
                  <form class="user" action="daftar-simpan.php" method="POST" id="my-form">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                      <label>NIM</label>
                      <input type="number" class="form-control" name="nim" id="nim" required>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>No. HP Aktif</label>
                        <input type="number" class="form-control" name="nohp" required>
                      </div>
                      <div class="col-sm-6">
                        <label>E-Mail</label>
                        <input type="email" class="form-control" name="email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>User ID</label>
                      <input type="text" class="form-control" name="userid" required>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                      <div class="col-sm-6">
                        <label>Ulangi Password</label>
                        <input type="password" class="form-control" name="password2" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <?php
                      $angka1 = rand(1, 9);
                      $angka2 = rand(1, 9);
                      $kunci = $angka1 + $angka2;
                      ?>
                      <label><b><?= huruf($angka1); ?> ditambah <?= huruf($angka2); ?></b> (angka) ?</label>
                      <input type="number" class="form-control" name="hasil" id="hasil" required>
                    </div>
                    <hr>
                    <input type="hidden" name="kunci" value="<?= $kunci; ?>">
                    <button type="submit" class="btn btn-primary btn-block" id="btn-submit"> <b>DAFTAR </b></button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="index.php">Kembali</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

  <!-- disable button once it clicked -->
  <script type="text/javascript">
    $(document).ready(function() {
      $("#my-form").submit(function(e) {
        $("#btn-submit").attr("disabled", true);
        return true;
      });
    });
  </script>
</body>

</html>