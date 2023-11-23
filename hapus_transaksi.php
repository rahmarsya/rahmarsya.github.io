<?php
include 'koneksi.php';

$id_transaksi= $_GET['id'];
mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");

header("location:transaksi.php");
?>