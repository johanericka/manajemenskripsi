<?php
session_start();
require('config.php');

if (!isset($_POST['userid'], $_POST['password'])) {
    header('location:index.php?pesan=gagal');
}

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$password = mysqli_real_escape_string($conn, strtolower($_POST['password']));
$kunci = mysqli_real_escape_string($conn, strtolower($_POST['kunci']));
$hasil = mysqli_real_escape_string($conn, strtolower($_POST['hasil']));

if ($kunci == $hasil) {
    $sql = mysqli_query($conn, "SELECT * FROM pengguna WHERE user='$userid' AND plaintext='$password'");
    $jmldata = mysqli_num_rows($sql);
    if ($jmldata > 0) {
        $datauser = mysqli_fetch_array($sql);
        $nama = $datauser['nama'];
        $nim = $datauser['nim'];
        $role = $datauser['role'];
        $email = $datauser['email'];
        $status = $datauser['status'];
        $prodi = $datauser['prodi'];
        $qjenjang = mysqli_query($conn, "SELECT DISTINCT(jenjang) FROM prodi WHERE namaprodi='$prodi'");
        $djenjang = mysqli_fetch_array($qjenjang);
        $jenjang = $djenjang[0];

        if ($status == 0) {
            header('location:index.php?pesan=notactive');
        } else {
            $_SESSION['userid'] = $userid;
            $_SESSION['nim'] = $nim;
            $_SESSION['nama'] = $nama;
            $_SESSION['role'] = $role;
            $_SESSION['prodi'] = $prodi;
            $_SESSION['email'] = $email;
            $_SESSION['jenjang'] = $jenjang;

            if ($role == 'adminprodi' or $role == 'adminfakultas') {
                header('location:admin/index.php');
            } elseif ($role == 'dosen') {
                header('location:dosen/index.php');
            } elseif ($role == 'mahasiswa') {
                header('location:mahasiswa/index.php');
            }
        }
    } else {
        header('location:index.php?pesan=gagal');
    }
} else {
    header('location:index.php?pesan=hitungsalah');
}
