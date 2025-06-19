<?php
include 'koneksi.php';
$nama = $_POST['nama'];
mysqli_query($conn, "INSERT INTO penulis (nama) VALUES ('$nama')");
header("Location: penulis.php");
?>
