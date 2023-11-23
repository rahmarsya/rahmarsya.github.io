<html>
table pelanggan guru
<table border="1">
  <tr>
        <td> NIP </td>
        <td> nama </td>
        <td> aksi </td>
  </tr>   

<?php
include "koneksi.php";
$data= mysqli_query($koneksi,"select * from guru");
while ($tampil = mysqli_fetch_array($data)){
?>

<tr> 
    <td> <?php echo $tampil['NIP'] ?> </td>
    <td> <?php echo $tampil['nama'] ?> </td>
    <td><a href="hapus_guru.php?id=<?php echo $tampil['NIP']; ?>">Hapus</a>
       <a href="edit_guru.php?id=<?php echo $tampil['NIP']; ?>">Edit</a></td>
</tr>

<?php
}
?>

</table>
<a href="input-guru.php"> Tambahkan data baru </a>
</html>  