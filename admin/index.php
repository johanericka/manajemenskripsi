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
            <h1 class="h3 mb-0 text-gray-800">Jadwal Ujian</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Jadwal Ujian</li>
            </ol>
          </div>
          <!-- ujian hari ini -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Jadwal Ujian Hari Ini 8 Nopember 2021</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Ujian</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Tempat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Ujian Proposal</td>
                        <td>Johan Ericka</td>
                        <td>09630001</td>
                        <td>8 Nopember 2021 jam 08.00 WIB</td>
                        <td>Ruang Rapat Prodi</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Ujian Proposal</td>
                        <td>Fulanah</td>
                        <td>09630333</td>
                        <td>8 Nopember 2021 jam 10.00 WIB</td>
                        <td>Lab. Sensor</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Ujian Komprehensif</td>
                        <td>Markonah</td>
                        <td>09630123</td>
                        <td>8 Nopember 2021 jam 13.00 WIB</td>
                        <td>Ruang Dosen</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
          <!-- pengajuan ujian -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pengajuan Ujian</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Ujian</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Ujian Proposal</td>
                        <td>Johan Ericka</td>
                        <td>09630001</td>
                        <td></td>
                        <td class="text-center"><button class="btn btn-primary" type="button">PENGAJUAN</button></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Ujian Proposal</td>
                        <td>Fulanah</td>
                        <td>09630333</td>
                        <td>2 Nopember 2021 jam 09.00 WIB</td>
                        <td class="text-center"><button class="btn btn-success" type="button">SELESAI</button></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Ujian Komprehensif</td>
                        <td>Markonah</td>
                        <td>09630123</td>
                        <td>12 Nopember 2021 jam 09.00 WIB</td>
                        <td class="text-center"><button class="btn btn-warning" type="button">TERJADWAL</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
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