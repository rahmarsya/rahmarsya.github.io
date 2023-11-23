<html>
table jurusan
<table border="1">
  <tr>
        <td> kd_jurusan</td>
        <td> jurusan </td>
        <td> aksi </td>
  </tr>   

<?php
include "koneksi.php";
$data= mysqli_query($koneksi,"select * from jurusan");
while ($tampil = mysqli_fetch_array($data)){
?>

<tr> 
    <td> <?php echo $tampil['kd_jurusan'] ?> </td>
    <td> <?php echo $tampil['jurusan'] ?> </td>
    <td><a href="hapus_jurusan.php?id=<?php echo $tampil['kd_jurusan']; ?>">Hapus</a>
       <a href="edit_jurusan.php?id=<?php echo $tampil['kd_jurusan']; ?>">Edit</a></td>
</tr>

<?php
}
?>

</table>
<a href="input_jurusan.php"> Tambahkan data baru </a>
</html>  