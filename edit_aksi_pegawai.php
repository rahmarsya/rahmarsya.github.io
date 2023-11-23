<?php
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama='$nama', alamat='$alamat', usia='$usia', jenis_kelamin='$jenis_kelamin' WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php");
?>