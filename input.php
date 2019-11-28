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
            <form action="" method="post">
                <label>Kode User</label>
                <input class="input-group" name="kode_member">
                <label>Nama</label>
                <input class="input-group" name="nama_member">
                <label>TTL</label>
                <input class="input-group" name="TTL">
                <button type="submit" name='submit' class='btn btn-primary my-4'>Tambah Data</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $sql = "insert into crud values('$_POST[kode_member]','$_POST[nama_member]','$_POST[TTL]')";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php');
    }
}
?>