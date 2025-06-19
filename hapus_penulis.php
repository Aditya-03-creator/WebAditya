<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM penulis WHERE id=$id");
header("Location: penulis.php");
?>
