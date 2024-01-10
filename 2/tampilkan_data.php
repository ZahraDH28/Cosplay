<?php
include "koneksi.php"; // Koneksi database

$query = "SELECT * FROM kostum";
$result = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nama_kostum'] . "</td>";
    echo "<td><a href='hapus_data.php?id=" . $row['id'] . "'>Hapus</a></td>";
    echo "</tr>";
}

mysqli_close($koneksi);
?>
