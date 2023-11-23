<?php
include 'koneksi.php';
$NIP = $_POST['NIP'];
$nama = $_POST['nama'];

mysqli_query($koneksi,"insert into guru values('$NIP',' $nama')");
header("location: guru.php");
?>