<?php
if (isset($_GET['id'])) {
    include "koneksi.php"; // Koneksi database

    $id = $_GET['id'];

    $query = "DELETE FROM kostum WHERE id = $id";
    mysqli_query($koneksi, $query);

    mysqli_close($koneksi);

    header("Location: sewa.php");
    exit();
}
?>
