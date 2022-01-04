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
  <?php require('vendor/myfunc.php'); ?>
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="img/uinlogo.png" width="100px">
                    <h1 class="h4 text-gray-900 mb-4">Sistem Manajemen Skripsi</h1>
                  </div>
                  <!-- baca pesan -->
                  <?php
                  //ambil nilai variabel pesan di URL
                  $pesan = $_GET['pesan'];
                  if ($pesan == 'success') {
                  ?>
                    <div class="alert alert-success" role="alert">
                      Pendaftaran pengguna berhasil
                    </div>
                  <?php
                  } elseif ($pesan == 'exist') {
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <b>ERROR!!</b> Pengguna telah terdaftar
                    </div>
                  <?php
                  } elseif ($pesan == 'passsalah') {
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <b>ERROR!!</b> Konfirmasi password tidak sama
                    </div>
                  <?php
                  } elseif ($pesan == 'hitungsalah') {
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <b>ERROR!!</b> Perhitungan salah
                    </div>
                  <?php
                  }
                  ?>

                  <form action="auth.php" method="POST">
                    <div class="form-group">
                      <label>User ID</label>
                      <input type="text" class="form-control" name="userid" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                      <?php
                      $angka1 = rand(1, 5);
                      $angka2 = rand(1, 5);
                      $kunci = $angka1 + $angka2;
                      ?>
                      <label>Berapakah <b><u><?= huruf($angka1); ?> ditambah <?= huruf($angka2); ?></u></b> (angka) ?</label>
                      <input type="number" class="form-control" name="hasil" id="hasil" required>
                      <input type="hidden" name="kunci" value="<?= $kunci; ?>">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">MASUK</button>
                  </form>
                  <hr>
                  <div class="row">
                    <div class="col">
                      <div class="text-center">
                        <a class="font-weight-bold" href="daftar.php">Daftar Akun</a>
                      </div>
                    </div>
                    <div class="col">
                      <div class="text-center">
                        <a class="font-weight-bold" href="lupa.php">Lupa Password</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>