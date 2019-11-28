<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from crud where kode_member='$id'";
$query = mysqli_query($koneksi,$sql);
$r = mysqli_fetch_array($query);
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
            <form action="" method="post">
                <label>Kode User</label>
                <input class="input-group" name="kode_member" value="<?=$r['kode_member']?>" readonly>
                <label>Nama</label>
                <input class="input-group" name="nama_member" value="<?=$r['nama_member']?>">
                <label>TTL</label>
                <input class="input-group" name="TTL" value="<?=$r['TTL']?>">
                <button type="submit" name="submit" class='btn btn-primary my-4'>Ubah Data</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $sql = "update crud set nama_member='$_POST[nama_member]', TTL='$_POST[TTL]' where kode_member='$_POST[kode_member]'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php');
    }
}
?>