<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM penulis");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kelola Penulis</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .back-link {
            display: block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 8px 12px;
            background: #f1f1f1;
            border-radius: 6px;
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        a.delete {
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="dashboard.php" class="back-link">← Kembali ke Dashboard</a>
        <h2>Kelola Penulis</h2>
        <form action="tambah_penulis.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Penulis" required>
            <button type="submit">Tambah</button>
        </form>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                <li>
                    <?= $row['nama'] ?>
                    <a href="hapus_penulis.php?id=<?= $row['id'] ?>" class="delete" onclick="return confirm('Hapus penulis ini?')">Hapus</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
