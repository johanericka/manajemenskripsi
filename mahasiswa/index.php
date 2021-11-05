<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/logo/uinlogo.png" rel="icon">
  <title>Manajemen Skripsi</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
  <link href="../css/timeline.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php require('sidebar.php'); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php require('topbar.php'); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Proses</h1>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="main-timeline">
                  <div class="timeline">
                    <a href="judulproposal-isi.php" class="timeline-content">
                      <div class="timeline-year">1</div>
                      <div class="timeline-icon"><i class="fa fa-file"></i></div>
                      <h3 class="title">Pengajuan Judul Proposal</h3>
                      <p class="description">
                        <b>Syarat :</b> </br>
                        - Form Pengajuan Judul<br />
                        <br />
                        <b>Status :</b> SELESAI
                      </p>
                    </a>
                  </div>
                  <div class="timeline">
                    <a href="ujianproposal-isi.php" class="timeline-content">
                      <div class="timeline-year">2</div>
                      <div class="timeline-icon"><i class="fa fa-comments"></i></div>
                      <h3 class="title">Ujian Proposal</h3>
                      <p class="description">
                        <b>Syarat :</b> </br>
                        - Lembar Persetujuan Pembimbing<br />
                        - Bukti lulus matakuliah Metode Penelitian & Seminar (KHS)<br />
                        - Berkas Proposal lengkap<br />
                        <br />
                        <b>Status :</b> TERJADWAL
                      </p>
                    </a>
                  </div>
                  <div class="timeline">
                    <a href="ujiankompre-isi.php" class="timeline-content">
                      <div class="timeline-year">3</div>
                      <div class="timeline-icon"><i class="fa fa-comments"></i></div>
                      <h3 class="title">Ujian Komprehensif</h3>
                      <p class="description">
                        <b>Syarat :</b> </br>
                        - Bukti lulus ujian proposal<br />
                        <br />
                        <b>Status :</b> -
                      </p>
                    </a>
                  </div>
                  <div class="timeline">
                    <a href="seminarhasil-isi.php" class="timeline-content">
                      <div class="timeline-year">4</div>
                      <div class="timeline-icon"><i class="fa fa-comments"></i></div>
                      <h3 class="title">Seminar Hasil</h3>
                      <p class="description">
                        <b>Syarat :</b> </br>
                        - Bukti lulus Ujian Komprehensif<br />
                        - Kartu kendali bukti konsultasi<br />
                        - Lembar persetujuan seminar hasil<br />
                        <br />
                        <b>Status :</b> -
                      </p>
                    </a>
                  </div>
                  <div class="timeline">
                    <a href="sidangskripsi-isi.php" class="timeline-content">
                      <div class="timeline-year">5</div>
                      <div class="timeline-icon"><i class="fa fa-gavel"></i></div>
                      <h3 class="title">Sidang Skripsi</h3>
                      <p class="description">
                        <b>Syarat :</b> </br>
                        - Form pendaftaran skripsi<br />
                        - Form A, A1, dan A2 yang sudah di tanda tangani<br />
                        - Foto resmi<br />
                        - Bukti lulus ujian Seminar Hasil<br />
                        - Bukti pembayaran semester akhir<br />
                        - KHS semester awal s/d akhir<br />
                        - Transkrip Nilai yang sudah di tanda tangani Dosen Wali dan Kepala Program Studi<br />
                        - Ijazah SLTA 2 lembar yang telah di legalisir<br />
                        - Sertifikat TOEFL<br />
                        - Sertifikat Bahasa Arab<br />
                        - Form Alumni yang sudah di tanda tangani<br />
                        <br />
                        <b>Status :</b> -
                      </p>
                    </a>
                  </div>
                  <div class="timeline">
                    <a href="#" class="timeline-content">
                      <div class="timeline-year">6</div>
                      <div class="timeline-icon"><i class="fa fa-graduation-cap"></i></div>
                      <h3 class="title">SELESAI</h3>
                      <p class="description">
                        <b>SELAMAT!!</b> anda telah berhasil menyelesaikan studi anda. Silahkan menunggu jadwal yudisium
                      </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php require('footer.php'); ?>
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
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
</body>

</html>