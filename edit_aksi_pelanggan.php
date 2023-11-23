<?php
include 'koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi, "UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama='$nama', umur='$umur', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_pelanggan='$id_pelanggan'");
header("location: pelanggan.php");
?>