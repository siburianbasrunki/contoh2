<?php
include_once('connect.php');
$nama =  $_POST['nama'];
$nim =  $_POST['nim'];
$prodi =  $_POST['prodi'];

$create = "INSERT INTO mahasiswa (nama , nim , prodi) VALUES ('$nama' , '$nim' , '$prodi')";

$result = mysqli_query($req, $create);

if($result){
    header("location: index.php");
}else{
    echo "Gagal Tambah";
}
?>