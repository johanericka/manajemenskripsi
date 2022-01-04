<?php
require('../config.php');
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$bidang = $_POST['bidang'];
$judul = mysqli_real_escape_string($conn, $_POST['judul']);
$token = md5(microtime());
date_default_timezone_set("Asia/Jakarta");
$tanggal = date('Y-m-d H:i:s');

//upload file
$target_dir = "../lampiran/";
$target_file = $target_dir . $nim . "-pengajuanjudul" . ".jpg";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//hapus apabila file sudah ada
unlink($target_file);

// Check file size
if ($_FILES["proposal"]["size"] > 1048576) {
    $uploadOk = 0;
}

// check file extention
if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
    $uploadOk = 0;
}

// check file MIME
$mimetype = mime_content_type($_FILES['proposal']['tmp_name']);
if (in_array($mimetype, array('image/jpeg', 'image/jpeg'))) {
} else {
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    header("location:judulproposal-isi.php?pesan=gagal");
    //echo 'something wrong';
} else {
    if (move_uploaded_file($_FILES["proposal"]["tmp_name"], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO pengajuanjudul (tanggal,nama,nim,bidang,judul,fileproposal,token)
        VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $tanggal, $nama, $nim, $bidang, $judul, $target_file, $token);
        $stmt->execute();
        header("location:index.php?pesan=success");
        //echo 'success';
    } else {
        header("location:index.php?pesan=gagal");
        //echo 'failed upload';
    }
}
