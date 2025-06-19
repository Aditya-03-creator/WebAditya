<?php
include 'koneksi.php';
$nama = $_POST['nama'];
mysqli_query($conn, "INSERT INTO kategori (nama) VALUES ('$nama')");
header("Location: kategori.php");
?>
