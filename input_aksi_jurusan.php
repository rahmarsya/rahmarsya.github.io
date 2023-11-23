<?php
include 'koneksi.php';
$kd_jurusan = $_POST['kd_jurusan'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi,"insert into jurusan values('$kd_jurusan',' $jurusan')");
header("location: jurusan.php");
?>