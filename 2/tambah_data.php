<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "koneksi.php"; // Koneksi database

    $nama_kostum = $_POST['nama_kostum'];

    $query = "INSERT INTO kostum (nama_kostum) VALUES ('$nama_kostum')";
    mysqli_query($koneksi, $query);

    mysqli_close($koneksi);

    header("Location: sewa.php");
    exit();
}
?>
