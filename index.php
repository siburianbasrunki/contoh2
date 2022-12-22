<?php
include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="tambah">
      <form action="handler.php" method="POST">
        <input type="text" placeholder="Nama" name="nama">
        <input type="text" placeholder="Nim" name="nim">
        <input type="text" placeholder="Prodi" name="prodi">
        <button>Create</button>
      </form>
    </div>
    <div class="container">
      <table border="1">
        <thead>
          <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>keterangan</th>
            <?php
          $query = 'SELECT * FROM mahasiswa';
          $result = mysqli_query($req, $query);
          ?>
          <?php
            foreach($result as $data):
          ?>
          </tr>
            <th><?= $data["nama"] ?></th>
            <th><?= $data["nim"] ?></th>
            <th><?= $data["prodi"] ?></th>
            <th>
              <a href="update.php?id=<?=$data['id']?>">Update</a>
              <a href="delete.php?id=<?=$data['id']?>">Delete</a>
            </th>
          </tr>
          <?php endforeach ?>
        </thead>
      </table>
    </div>
  </body>
</html>
