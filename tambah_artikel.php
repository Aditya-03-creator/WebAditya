<?php
include 'koneksi.php';
$penulis = mysqli_query($conn, "SELECT * FROM penulis");
$kategori = mysqli_query($conn, "SELECT * FROM kategori");
?>

<form method="POST">
    <input type="text" name="judul" placeholder="Judul" required><br><br>
    <textarea name="isi" placeholder="Isi Artikel" required></textarea><br><br>

    <label>Penulis:</label><br>
    <select name="id_penulis" required>
        <option value="">-- Pilih Penulis --</option>
        <?php while ($p = mysqli_fetch_assoc($penulis)) { ?>
            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
        <?php } ?>
    </select><br><br>

    <label>Kategori:</label><br>
    <select name="id_kategori" required>
        <option value="">-- Pilih Kategori --</option>
        <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
            <option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
        <?php } ?>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>

<!DOCTYPE html>
<html>
<head><title>Tambah Artikel</title></head>
<body>
    <h2>Tambah Artikel</h2>
    <form method="POST">
        <input type="text" name="judul" placeholder="Judul" required><br><br>
        <textarea name="isi" placeholder="Isi Artikel" rows="8" required></textarea><br><br>

        <label>Penulis:</label><br>
        <select name="id_penulis" required>
            <option value="">-- Pilih Penulis --</option>
            <?php
            $penulis = mysqli_query($conn, "SELECT * FROM penulis");
            while ($p = mysqli_fetch_assoc($penulis)) {
                echo "<option value='{$p['id']}'>{$p['nama']}</option>";
            }
            ?>
        </select><br><br>

        <label>Kategori:</label><br>
        <select name="id_kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <?php
            $kategori = mysqli_query($conn, "SELECT * FROM kategori");
            while ($k = mysqli_fetch_assoc($kategori)) {
                echo "<option value='{$k['id']}'>{$k['nama']}</option>";
            }
            ?>
        </select><br><br>

        <button type="submit">Simpan Artikel</button>
    </form>
    <br>
    <a href="artikel.php">Kembali ke Daftar Artikel</a>
</body>
</html>
