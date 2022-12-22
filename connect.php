<?php

$Host = 'localhost';
$dbName = 'mahasiswa';
$dbUsername = 'root';
$dbPassword = '';

$req = mysqli_connect($Host,$dbUsername, $dbPassword , $dbName);

if ($req) {
    echo "Berhasil";
}else {
    echo "Konek Gagal";
}
?>