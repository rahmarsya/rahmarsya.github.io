<?php
include 'koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"insert into pelanggan values ('$id_pelanggan','$nama','$umur','$alamat','$jenis_kelamin')");
header("location: pelanggan.php");
?>