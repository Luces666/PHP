<?php
var_dump($_POST);
include('koneksi.php');
$berhasil = false;

if (isset($_POST['tambah'])) {
    $nama = $_POST['Nama'];
    $kelas = $_POST['Kelas'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas (Nama, Kelas) VALUE('$nama', '$kelas')");

    if ($query) {
        $berhasil = true;
    } else {
        echo "Data gagal ditambahkan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Data Nama & Kelas</title>
</head>

<body>
    <h2>Tambah Nama & Kelas:</h2>

    <?php if ($berhasil): ?>
        <p>Data berhasil ditambahkan</p>
        <a href="index.php"><button type="button">Kembali ke Index</button></a>
    <?php else: ?>
        <form action="" method="post">
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" id="Nama" required>
            <br><br>
            <label for="Kelas">Kelas:</label>
            <input type="text" name="Kelas" id="Kelas" required>
            <br><br>
            <input type="submit" name="tambah" value="Tambah">
            <a href="index.php">Batal</a>
        </form>
    <?php endif; ?>
</body>

</html>