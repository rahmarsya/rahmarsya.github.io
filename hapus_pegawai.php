<?php
include 'koneksi.php';

$id_pegawai = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");

header("location: pegawai.php");
?>