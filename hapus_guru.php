<?php
include 'koneksi.php';

$id= $_GET['id'];
mysqli_query($koneksi, "delete from guru where NIP='$id'");

header("location: guru.php");
?>