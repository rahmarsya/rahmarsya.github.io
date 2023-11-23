<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_pegawai = $_POST['id_pegawai'];
$tipe_kamar = $_POST['tipe_kamar'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"UPDATE transaksi SET id_transaksi='$id_transaksi ',id_pelanggan='$id_pelanggan',id_pegawai='$id_pegawai',tipe_kamar='$tipe_kamar',check_in='$check_in',check_out='$check_out',harga='$harga' WHERE id_transaksi='$id_transaksi'");
header("location: transaksi.php");
?>