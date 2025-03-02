<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO user (nama, ussername, password) VALUES ('$nama', '$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "Registrasi berhasil! <a href='login.php'>Login di sini</a>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
