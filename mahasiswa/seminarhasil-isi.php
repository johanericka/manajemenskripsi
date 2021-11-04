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
                        <h1 class="h3 mb-0 text-gray-800">Pendaftaran Seminar Hasil</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Seminar Hasil</li>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Form Basic -->
                            <div class="card mb-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pendaftaran Seminar Hasil</h6>
                                </div>
                                <div class="card-body">
                                    <form action="index.php" enctype="multipart/form-data" method="POST">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="Johan Ericka" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input type="text" class="form-control" value="09640001" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon / HP</label>
                                            <input type="number" class="form-control" value="08123456789" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="johan@uin-malang.ac.id" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Minat</label>
                                            <input type="text" class="form-control" value="Sensor" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" value="Perbandingan Sensitivitas Sensor Suhu dan Kelembaban DHT-11 dan DHT-22 Pada Studi Kasus Smart Green House" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Form Pendaftaran Seminar Hasil</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile02" />
                                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Kartu Kendali Bukti konsultasi</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile02" />
                                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Lembar Persetujuan Pembimbing 1</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile02" />
                                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Laporan Seminar Hasil</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile02" />
                                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                <small>Setelah revisi</small>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ajukan</button>
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