<?php
// Memasukkan / menyambungkan file koneksi ke index.php
// include : memasukkan file dan akan menampilkan error jika file tidak ditemukan
// include_once : memasukkan file hanya sekali
// require : memasukkan file dan akan menampilkan error fatal jika file tidak ditemukan
// require_once : memasukkan file hanya sekali dan akan menampilkan error fatal jika file tidak ditemukan
    include "koneksi.php";

// Menampilkan data dari database
    $result = mysqli_query($koneksi, "SELECT * FROM kelas");
    var_dump(mysqli_num_rows($result));
    echo "<p>BERHASIL</p>";
?>

<?php
    echo "<h3>Manejemen Siswa</h3>";
    $no = 1;
    echo "<a href = 'tambah.php?id'>Tambah Siswa</a>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
         </tr>";

    $no = 1;

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['Nama'] . "</td>";
        echo "<td>" . $row['Kelas'] . "</td>";
        echo "<td>
                <a href = 'edit.php?id=" . $row['No'] . "'>Edit</a> |
                <a href = 'hapus.php?id=" . $row['No'] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                </td>";
        echo "</tr>";
    }
    echo "</table>";
?>