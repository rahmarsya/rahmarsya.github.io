<html>

<table border="1">
  <tr>
        <td> id_transaksi </td>
        <td> id_pelanggan </td>
        <td> id_pegawai </td>
        <td> tipe_kamar </td>
        <td> check_in </td>
        <td> check_out </td>
        <td> harga </td>
        <td> aksi </td>
  </tr>   

<?php
include "koneksi.php";
$data= mysqli_query($koneksi,"select * from transaksi");
while ($tampil = mysqli_fetch_array($data)){
?>

<tr> 
    <td> <?php echo $tampil['id_transaksi'] ?> </td>
    <td> <?php echo $tampil['id_pelanggan'] ?> </td>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['check_in'] ?> </td>
    <td> <?php echo $tampil['check_out'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>
    <td><a href="hapus_transaksi.php?id=<?php echo $tampil['id_transaksi']; ?>">Hapus</a>
       <a href="edit_transaksi.php?id=<?php echo $tampil['id_transaksi']; ?>">Edit</a></td>
</tr>

<?php
}
?>

</table>
<a href="input_transaksi.php"> Tambahkan data baru </a>
</html>  