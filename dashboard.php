<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit;
}
// Cek apakah yang login adalah admin
if ($_SESSION['role'] !== 'admin') {
    echo "<script>alert('Maaf, halaman ini khusus untuk admin!'); window.location='index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            max-width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
        }

        .menu a {
            text-align: center;
            padding: 12px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .menu a:hover {
            background: #0056b3;
        }

        .logout {
            text-align: center;
            margin-top: 30px;
        }

        .logout a {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Halo, <?= $_SESSION['username'] ?>! (Admin)</h2>
        <div class="menu">
            <a href="index.html">Buka Blog</a>
            <a href="penulis.php">Kelola Penulis</a>
            <a href="kategori.php">Kelola Kategori</a>
        </div>
        <div class="logout">
            <p><a href="logout.php">Logout</a></p>
        </div>
    </div>
</body>
</html>
