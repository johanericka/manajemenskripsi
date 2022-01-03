<?php
session_start();
require('config.php');

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$pass = mysqli_real_escape_string($conn, strtolower($_POST['password']));
$md5pass = md5($pass);
$kunci = mysqli_real_escape_string($conn, strtolower($_POST['kunci']));
$hasil = mysqli_real_escape_string($conn, strtolower($_POST['hasil']));

if ($kunci == $hasil) {
    $stmt = $conn->prepare("SELECT * FROM pengguna WHERE userid=? AND pass=?");
    $stmt->bind_param("ss", $userid, $md5pass);
    $stmt->execute();
    $result = $stmt->get_result();
    $juser = $result->num_rows;

    //jika data ditemukan
    if ($juser > 0) {
        //ambil data
        $dhasil = $result->fetch_assoc();
        $nama = $dhasil['nama'];
        $nim = $dhasil['nim'];
        $role = $dhasil['role'];
        $jabatan = $dhasil['jabatan'];
        $email = $dhasil['email'];

        //set settion
        $_SESSION['userid'] = $userid;
        $_SESSION['nim'] = $nim;
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $role;
        $_SESSION['jabatan'] = $jabatan;
        $_SESSION['email'] = $email;

        if ($role == 'admin') {
            header('location:admin/index.php');
        } elseif ($role == 'dosen') {
            header('location:dosen/index.php');
        } elseif ($role == 'mahasiswa') {
            header('location:mahasiswa/index.php');
        }
    } else {
        header('location:index.php?pesan=gagal');
    }
} else {
    header('location:index.php?pesan=hitungsalah');
}
