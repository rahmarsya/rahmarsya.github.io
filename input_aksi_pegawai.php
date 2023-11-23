<?php
include 'koneksi.php';
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"insert into pegawai values('$id_pegawai','$nama','$alamat' ,'$usia' ,'$jenis_kelamin')");
header("location: pegawai.php");
?>