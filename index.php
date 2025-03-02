<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM user");

echo "<h2>Daftar User</h2>";
echo "<a href='pendaftaran.php'>Daftar User Baru</a> | <a href='login.php'>Login</a><br><br>";

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Username</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['nama']}</td>
    <td>{$row['ussername']}</td>
    </tr>";
}

echo "</table>";
?>
