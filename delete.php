<?php

include_once('connect.php');
$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id = $id";

$result = mysqli_query($req, $query);

if($result){
    header("location: index.php");
}else{
    echo "GAGAL";
}

?>