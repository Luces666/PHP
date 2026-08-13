<?php
    include ("koneksi.php");
    $id = $_GET['id'];
    $berhasil = false;

    $result = mysqli_query($koneksi, "SELECT * FROM kelas WHERE No = $id");
    $data = mysqli_fetch_assoc($result);

    if (isset($_POST['kirim'])){
        $nama = $_POST['Nama'];
        $kelas = $_POST['Kelas'];

        $query = mysqli_query($koneksi, "UPDATE kelas SET Nama = '$nama', Kelas = '$kelas' WHERE No = $id");

        if($query){
            $berhasil = true;
        } else {
            echo "data gagal diubah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h3>Edit Nama & Kelas:</h3>
    <?php if ($berhasil): ?>
        <p>Data berhasil diubah</p>
        <a href="index.php"><button type="button">Kembali ke Index</button></a>
    <?php else: ?>
        <form action="" method="post">
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" id="Nama" value="<?php echo $data['Nama']?>" required>
            <br><br>
            <label for="Kelas">Kelas:</label>
            <input type="text" name="Kelas" id="Kelas" value="<?php echo $data['Kelas']?>" required>
            <br><br>
            <input type="submit" name="kirim" value="Simpan">
            <a href="index.php">Batal</a>
        </form>
    <?php endif; ?>
</body>
</html>