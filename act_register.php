<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$role = $_POST['role'];

if ($password !== $repassword) {
    echo "<script>alert('Password tidak cocok!'); window.location='register.html';</script>";
    exit;
}

// Cek jika role admin dan admin sudah ada
if ($role === 'admin') {
    $cekAdmin = mysqli_query($conn, "SELECT * FROM users WHERE role='admin'");
    if (mysqli_num_rows($cekAdmin) > 0) {
        echo "<script>alert('Admin sudah terdaftar!'); window.location='register.html';</script>";
        exit;
    }
}

$hashed = password_hash($password, PASSWORD_DEFAULT);
$query = mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed', '$role')");

if ($query) {
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.html';</script>";
} else {
    echo "<script>alert('Registrasi gagal!'); window.location='register.html';</script>";
}
?>
