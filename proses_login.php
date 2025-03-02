<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE ussername='$username'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['ussername'];
        $_SESSION['nama'] = $row['nama'];
        header("Location: dashboard.php");
    } else {
        echo "Username atau password salah!";
    }
}
?>
