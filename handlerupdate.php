<?php 
include_once('connect.php');
$nama =  $_POST['nama'];
$nim =  $_POST['nim'];
$prodi =  $_POST['prodi'];
$id =  $_POST['id'];

$query2 = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', prodi = '$prodi' WHERE id = $id";
$result = mysqli_query($req, $query2);
if($result) {
    header("location: index.php");
}else {
    echo "Data gagal DI Update";
}
?>