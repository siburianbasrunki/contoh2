<?php
include_once('connect.php');
$id = $_GET['id'];
$query = 'SELECT * FROM mahasiswa';
$result = mysqli_query($req, $query);

//$query2 = "SELECT * FROM mahasiswa WHERE id = '$id'"; [bisa pake ini juga]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tambah">
      <form action="handlerupdate.php" method="POST">
        <?php foreach($result as $data) :?>
            <?php if($data['id'] == $id):?>
                <input type="text" placeholder="Nama" name="nama" value="<?=$data['nama']?>">
                <input type="text" placeholder="Nim" name="nim" value="<?=$data['nim']?>">
                <input type="text" placeholder="Prodi" name="prodi" value="<?=$data['prodi']?>">
                <input type="hidden" name="id" value="<?=$data['id']?>">
            <?php endif ?>
        <?php endforeach ?>
        <button>Update</button>
      </form>
    </div>
</body>
</html>