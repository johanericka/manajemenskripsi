<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/uinlogo.png" rel="icon">
    <title>Pelayanan Online | Login</title>
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
                                        <img src="img/logo/kop.jpg" class="img-fluid">
                                        <h1 class="h4 text-gray-900 mb-4">Pelayanan Online</h1>
                                    </div>
                                    <?php
                                    if (isset($_GET['pesan'])) {
                                        $pesan = $_GET['pesan'];
                                        if (isset($pesan)) {
                                            if ($pesan == 'gagal') {
                                    ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <strong>ERROR!</strong> User ID / Password salah.
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'notactive') {
                                            ?>
                                                <div class="alert alert-warning alert-dismissible">
                                                    <strong>ERROR!</strong> Akun belum aktif. <br />
                                                    Tunggu Admin mengaktifkan akun anda.
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'success') {
                                            ?>
                                                <div class="alert alert-success alert-dismissible">
                                                    <strong>BERHASIL!!</strong> Pendaftaran Akun berhasil.<br />
                                                    Tunggu Admin untuk mengaktifkan akun anda
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'exist') {
                                            ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <strong>ERROR!!</strong> Pengguna telah terdaftar<br />
                                                    Klik <a href="forgot-password.html"> Lupa Password </a> apabila anda lupa password anda
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'hitungsalah') {
                                            ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <strong>ERROR!</strong> hasil perhitungan salah.
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'noaccess') {
                                            ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <strong>ERROR!</strong> Anda tidak berhak mengakses halaman ini!!
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'emailsukses') {
                                            ?>
                                                <div class="alert alert-success alert-dismissible">
                                                    <strong>BERHASIL!!</strong> Silahkan cek email anda.
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'emailgagal') {
                                            ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <strong>GAGAL!!</strong> NIM / eMail tidak ditemukan / salah!!
                                                </div>
                                            <?php
                                            } elseif ($pesan == 'updatepassok') {
                                            ?>
                                                <div class="alert alert-success alert-dismissible">
                                                    <strong>Perubahan Password berhasil</strong> <br />
                                                    Silahkan login dengan password baru anda
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <form class="user" method="POST" action="password-reset.php" id="my-form">
                                        <div class="form-group">
                                            <label>Email Terdaftar</label>
                                            <input type="email" class="form-control" name="email" required>
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
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning btn-block" id="btn-submit"> <b>RESET PASSWORD</b></button>
                                        </div>
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
                                                <a class="font-weight-bold" href="index.php">Login</a>
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