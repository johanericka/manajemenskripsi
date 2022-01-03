<?php
session_start();
require('config.php');
require('vendor/phpmailer/sendmail.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$kunci = mysqli_real_escape_string($conn, strtolower($_POST['kunci']));
$hasil = mysqli_real_escape_string($conn, strtolower($_POST['hasil']));

if ($kunci == $hasil) {
    $qpengguna = mysqli_query($conn, "SELECT * FROM pengguna WHERE email='$email'");
    $jpengguna = mysqli_num_rows($qpengguna);
    if ($jpengguna > 0) {
        $dpengguna = mysqli_fetch_array($qpengguna);
        $nama = $dpengguna['nama'];
        $user = $dpengguna['user'];
        $token = $dpengguna['token'];
        $actual_link = "https://$_SERVER[HTTP_HOST]";
        //kirim email user
        $subject = "Lupa Password Pelayanan Online Fakultas Humaniora UIN Malang";
        $pesan = "Yth. " . $nama . "
                            <br/>
                            Assalamualaikum Wr. Wb.
                            <br/>
                            Sistem telah menerima permintaan lupa password anda.
                            <br/>
                            Silahkan klik tombol berikut ini untuk mengubah password anda.
                            <br/>
                            <br/>
                            <a href='" . $actual_link . "/password-ubah.php?token=$token' style=' background-color: #0000FF;border: none;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;'>Reset Password</a>
                            <br/>
                            <br/>
                            Atau copy & paste link berikut ini ke web-browser anda apabila tombol diatas tidak berfungsi
                            <br/>
                            " . $actual_link . "/password-ubah.php?token=$token
                            <br/>
                            <br/>
                            <b> Apabila anda tidak merasa melakukan permintaan Reset Password, abaikan email ini</b>
                            <br/>
                            <br/>
                            Wassalamualaiakum Wr. Wb.
                            ";
        sendmail($email, $nama, $subject, $pesan);
        header("location:index.php?pesan=emailsukses");
    } else {
        header("location:index.php?pesan=emailgagal");
    }
} else {
    header("location:index.php?pesan=emailgagal");
}
