<?php
include 'koneksi.php';

$id= $_GET['id'];
mysqli_query($koneksi, "delete from jurusan where kd_jurusan='$id'");   

header("location: jurusan.php");
?>