<?php
session_start();
$userid = $_SESSION['userid'];
global $userid;
$role = $_SESSION['role'];
$jabatan = $_SESSION['jabatan'];
$nama = $_SESSION['nama'];
$nim = $_SESSION['nim'];
if ($role != 'mahasiswa') {
    header("location:../deauth.php");
}
require('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Manajemen Skripsi</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
        require('sidebar.php');
        ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php
                require('topbar.php');
                ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pengajuan Judul Proposal Skripsi</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan Judul Proposal</li>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Form Basic -->
                            <div class="card mb-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Judul Proposal</h6>
                                </div>
                                <div class="card-body">
                                    <form action="judulproposal-simpan.php" enctype="multipart/form-data" method="POST">
                                        <input type="hidden" class="form-control" value="<?= $nama; ?>" name="nama">
                                        <input type="hidden" class="form-control" value="<?= $nim; ?>" name="nim">
                                        <div class="form-group">
                                            <label>Bidang Minat</label>
                                            <select name="bidang" class="form-control">
                                                <option value="Biofisika" selected>Biofisika</option>
                                                <option value="Elekronika dan Instrumentasi">Elekronika dan Instrumentasi</option>
                                                <option value="Fisika Material">Fisika Material</option>
                                                <option value="Fisika Teori">Fisika Teori</option>
                                                <option value="GeoFisika">Geofisika</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Proposal</label>
                                            <input type="text" class="form-control" name="judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label>File Proposal</label>
                                            <input type="file" name="proposal" class="form-control" accept=".jpg,.jpeg" required>
                                            <small style="color:red">
                                                <li>Ukuran file maksimal 1 MB format JPG</li>
                                            </small>
                                            <small style="color:red">
                                                <li>Formulir sudah di setujui dan di tanda tangani minimal 2 calon pembimbing</li>
                                            </small>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">AJUKAN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->
                </div>
            </div>
            <!-- Footer -->
            <?php
            require('footer.php');
            ?>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/ruang-admin.min.js"></script>

</body>

</html>