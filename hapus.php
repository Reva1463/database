<?php
include 'config/koneksi.php';
$kode = $_GET['kode'];
mysqli_query($conn, "DELETE FROM barang WHERE kode='$kode'");
echo "<script>window.location='index.php';</script>";
?>