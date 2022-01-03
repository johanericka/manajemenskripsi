<?php
session_start();
require('config.php');
require('vendor/phpmailer/sendmail.php');

$hasil = mysqli_real_escape_string($conn, $_POST['hasil']);
$kunci = mysqli_real_escape_string($conn, $_POST['kunci']);
$password1 = mysqli_real_escape_string($conn, $_POST['password1']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
$password3 = md5($password1);
$token =  mysqli_real_escape_string($conn, $_POST['token']);

if ($hasil == $kunci) {
    if ($password1 == $password2) {
        $token2 = md5(microtime());
        $qupdate = mysqli_query($conn, "UPDATE pengguna SET pass='$password3', plaintext='$password1',token='$token2' WHERE token='$token'");
        $actual_link = "https://$_SERVER[HTTP_HOST]/pelayananonline";
        //kirim email user
        $subject = "Lupa Password Pelayanan Online Fakultas Humaniora UIN Malang";
        $pesan = "Yth. " . $nama . "
                            <br/>
                            Assalamualaikum Wr. Wb.
                            <br/>
                            Permintaan ubah password anda telah berhasil dilakukan.
                            <br/>
                            Silahkan klik tombol berikut ini untuk masuk kedalam sistem pelayanan online Fakultas Humaniora UIN Malang.
                            <br/>
                            <br/>
                            <a href='" . $actual_link . "' style=' background-color: #0000FF;border: none;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;'>Pelayanan Online</a>
                            <br/>
                            <br/>
                            Atau copy & paste link berikut ini ke web-browser anda apabila tombol diatas tidak berfungsi
                            <br/>
                            " . $actual_link . "
                            <br/>
                            <br/>
                            Wassalamualaiakum Wr. Wb.
                            ";
        sendmail($email, $nama, $subject, $pesan);
        header("location:index.php?pesan=updatepassok");
    } else {
        header("location:password-ubah.php?pesan=pass&token=<?= $token;?>");
    }
} else {
    header("location:password-ubah.php?pesan=kunci&token=<?=$token;?>");
}
