<?php
$dbhost = 'narayaitsolution.web.id';
$dbuser = 'narayait_manajemenskripsi';
$dbpass = 'A7KWu9~OqGWV';
$dbname = 'narayait_manajemenskripsi';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_query($conn, "SET NAMES utf8;");
mysqli_query($conn, "SET CHARACTER_SET utf8;");
/*
if (!$conn) {
	die('Could not connect: ') . mysqli_error($conn);
}
*/
//echo 'Connected successfully' . "<br/>";