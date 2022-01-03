<?php
require('config.php');
$kunci = mysqli_real_escape_string($conn, $_POST['kunci']);
$hasil = mysqli_real_escape_string($conn, $_POST['hasil']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$nim = mysqli_real_escape_string($conn, $_POST['nim']);
$nohp = mysqli_real_escape_string($conn, $_POST['nohp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
$passmd5 = md5($password);
$token = md5(microtime());
if ($kunci == $hasil) {
	$quser = mysqli_query($conn, "SELECT * FROM pengguna WHERE nim='$nim' or email='$email'");
	$nuser = mysqli_num_rows($quser);
	if ($nuser > 0) {
		header('location: index.php?pesan=exist');
	} else {
		if ($password == $password2) {
			$qsimpan = mysqli_query($conn, "INSERT INTO pengguna (nama,nim,nohp,email,user,pass,plaintext,token)
											VALUES ('$nama','$nim','$nohp','$email','$userid','$passmd5','$password','$token')");
			header('location:index.php?pesan=success');
		} else {
			header('location:daftar.php?pesan=passsalah');
		}
	}
} else {
	header('location: daftar.php?pesan=hitungsalah');
}
