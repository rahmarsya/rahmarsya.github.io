<html>
<table border="1">
  <tr>
        <td> id_kamar </td>
        <td> tipe_kamar </td>
        <td> harga </td>
        <td> aksi </td>
  </tr>   

<?php
include "koneksi.php";
$data= mysqli_query($koneksi,"select * from kamar");
while ($tampil = mysqli_fetch_array($data)){
?>

<tr> 
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>
    <td><a href="hapus_kamar.php?id=<?php echo $tampil['id_kamar']; ?>">Hapus</a>
       <a href="edit_kamar.php?id=<?php echo $tampil['id_kamar']; ?>">Edit</a></td>
</tr>

<?php
}
?>

</table>
<a href="input_kamar.php"> Tambahkan data baru </a>
</html>  