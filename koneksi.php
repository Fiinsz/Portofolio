<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pemweb";

// Koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
