<?php
$host = "localhost";
$user = "root";
$pass = "aditinyol.03";
$db   = "blogdb"; // Ganti sesuai database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
