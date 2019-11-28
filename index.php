<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>LATIHAN CRUD</title>
</head>
<body>
<div class="text-center">
<h1 class='mt-4'>Latihan CRUD</h1>
<p><i>rafli1337ex.blogspot.com</i></p>
</div>
<div class="row justify-content-center">
<div class="col-6">
<a href="input.php" class="btn btn-primary">Tambah Member</a>
    <table class="table-white table my-2">
        <tr>
            <th>Kode</th>    
            <th>Nama</th>
            <th>TTL</th>
            <th>Aksi</th>
        </tr>
       
        <?php
        $sql = "select * from crud";
        $query = mysqli_query($koneksi,$sql);
        while($r = mysqli_fetch_array($query)){?>
         <tr>
            <td><?=$r['kode_member']?></td>
            <td><?= $r['nama_member'] ?></td>
            <td><?= $r['TTL'] ?></td>
            <td> <a class="badge badge-warning" href="edit.php?id=<?=$r['kode_member']?>">Edit</a> <a class="badge badge-danger" href="hapus.php?id=<?=$r['kode_member']?>">Hapus</a></td>
            </tr>
        <?php } ?>
        
    </table>
        </div>
        </div>
</body>
</html>