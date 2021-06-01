<?php
$host = "localhost";
$user = "root";
$pass = "spasi";
$db = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn ==false)

{
    echo "koneksi ke server database bermasalah.";
    die();
} else echo "Koneksi Berhasil";
?>