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
	$stmt = $conn->prepare("SELECT * FROM pengguna WHERE nim=? OR email=? OR nohp=? OR userid=?");
	$stmt->bind_param("ssss", $nim, $email, $nohp, $userid);
	$stmt->execute();
	$result = $stmt->get_result();
	$juser = $result->num_rows;

	if ($juser > 0) {
		header('location: index.php?pesan=exist');
	} else {
		if ($password == $password2) {
			$stmt = $conn->prepare("INSERT INTO pengguna (nama,nim,nohp,email,userid,pass,token)
									VALUES (?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssss", $nama, $nim, $nohp, $email, $userid, $passmd5, $token);
			$stmt->execute();
			header('location:index.php?pesan=success');
		} else {
			header('location:daftar.php?pesan=passsalah');
		}
	}
} else {
	header('location: daftar.php?pesan=hitungsalah');
}
