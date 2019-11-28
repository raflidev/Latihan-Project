<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "delete from crud where kode_member='$id'";
$query = mysqli_query($koneksi,$sql);
if($query){
    header('location:index.php');
}
?>