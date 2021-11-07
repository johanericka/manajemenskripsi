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
                        <h1 class="h3 mb-0 text-gray-800">Ujian Komprehensif</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ujian Komprehensif</li>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Form Basic -->
                            <div class="card mb-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                                </div>
                                <div class="card-body">
                                    <form action="ujianproposal-penguji.php" enctype="multipart/form-data" method="POST">
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
                                            <input type="text" class="form-control" value="Sensor" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" value="Perbandingan Sensitivitas Sensor Suhu dan Kelembaban DHT-11 dan DHT-22 Pada Studi Kasus Smart Green House" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Dosen Pembimbing</label>
                                            <select class="form-control">
                                                <option>Dr. Imam Tazi, M.Si | 4</option>
                                                <option>Drs. M. Tirono, M.Si | 3</option>
                                                <option>Dr. H. Agus Mulyono, M.Kes | 6</option>
                                                <option>Farid Samsu Hananto, M.T | 2</option>
                                                <option>Irjan, M.Si | 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Dosen Penguji 1</label>
                                                    <select class="form-control">
                                                        <option>Dr. Imam Tazi, M.Si | 4</option>
                                                        <option>Drs. M. Tirono, M.Si | 3</option>
                                                        <option>Dr. H. Agus Mulyono, M.Kes | 6</option>
                                                        <option>Farid Samsu Hananto, M.T | 2</option>
                                                        <option>Irjan, M.Si | 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Dosen Penguji 2</label>
                                                    <select class="form-control">
                                                        <option>Dr. Imam Tazi, M.Si | 4</option>
                                                        <option>Drs. M. Tirono, M.Si | 3</option>
                                                        <option>Dr. H. Agus Mulyono, M.Kes | 6</option>
                                                        <option>Farid Samsu Hananto, M.T | 2</option>
                                                        <option>Irjan, M.Si | 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="album py-5 bg-light">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card mb-6 box-shadow">
                                                            <img class="card-img-top" src="../img/noimage.png" alt="Card image cap">
                                                            <div class="card-body">
                                                                <p class="card-text">Surat Keterangan Lulus Ujian Proposal</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <button type="submit" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-primary btn-block" id="btn-submit">
                                                    <i class="fas fa-thumbs-up"></i><b> SETUJUI</b>
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#tolakModal">
                                                    <i class="fas fa-times-circle"></i><b> TOLAK</b>
                                                </a>
                                            </div>
                                        </div>
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