<?php
    include('koneksi.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM kelas WHERE No = $id");

        if($query){
            echo "<script>
                alert('Data berhasil di hapus.');
                window.location.href = 'index.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Data tidak ada.');
            window.location.href = 'index.php';
        </script>";
    }
?>