<?php
session_start();
$userid = $_SESSION['userid'];
$nim = $_SESSION['nim'];
global $userid;
$role = $_SESSION['role'];
$jabatan = $_SESSION['jabatan'];
if ($role != 'mahasiswa') {
    header("location:../deauth.php");
}
require('../config.php');
require('../vendor/myfunc.php');
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
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-gray-800">Proses Skripsi</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Proses Skripsi</li>
                        </ol>
                    </div>
                    <!-- ujian hari ini -->
                    <div class="row">
                        <!-- Datatables -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Proses Ujian</h6>
                                </div>
                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush" id="dataTable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Proses</th>
                                                <th class="text-center">Waktu</th>
                                                <th class="text-center">Tempat</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <!-- ambil data pengajuan judul-->
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM pengajuanjudul WHERE nim=?");
                                        $stmt->bind_param("s", $nim,);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        $dhasil = $result->fetch_assoc();
                                        $tanggal = $dhasil['tanggal'];
                                        $pembimbing = $dhasil['pembimbing'];
                                        $status = $dhasil['status'];
                                        $token = $dhasil['token'];
                                        $keterangan = $dhasil['keterangan'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pengajuan Judul</td>
                                                <td><?= tgljam_indo($tanggal); ?></td>
                                                <td>-</td>
                                                <td>
                                                    <?php
                                                    if ($status == 0) {
                                                        echo 'Menunggu Verifikasi';
                                                    } elseif ($status == 1) {
                                                        echo 'Disetujui';
                                                    } elseif ($status == 2) {
                                                        echo 'Ditolak';
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($status == 0) {
                                                    ?>
                                                        <a href="#" class="btn btn-secondary" type="button" onclick="alert('Menunggu Verifikasi');"><i class="fa fa-spinner" aria-hidden="true"></i></a>
                                                    <?php
                                                    } elseif ($status == 1) {
                                                    ?>
                                                        <a href="judulproposal-detail.php?token=<?= $token; ?>" class="btn btn-success" type="button"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                    <?php
                                                    } elseif ($status == 2) {
                                                    ?>
                                                        <a href="#" class="btn btn-danger" type="button" onclick="alert('Alasan <?= $keterangan; ?>');"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                                    <?php
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

</body>

</html>