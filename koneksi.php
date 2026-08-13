<?php
// mengkoneksikan ke database,
define('HOST_NAME', 'Localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'siswa');

$koneksi = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

?>