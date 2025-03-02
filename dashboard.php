<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Selamat datang, " . $_SESSION['nama'] . "!</h2>";
echo "<a href='logout.php'>Logout</a>";
?>
