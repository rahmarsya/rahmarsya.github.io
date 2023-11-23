<html>

<table border="1">
  <tr>
        <td> id_pelanggan </td>
        <td> nama </td>
        <td> umur </td>
        <td> alamat </td>
        <td> jenis_kelamin </td>
        <td> aksi </td>
  </tr>   

<?php
include "koneksi.php";
$data= mysqli_query($koneksi,"select * from pelanggan");
while ($tampil = mysqli_fetch_array($data)){
?>

<tr> 
    <td> <?php echo $tampil['id_pelanggan'] ?> </td>
    <td> <?php echo $tampil['nama'] ?> </td>
    <td> <?php echo $tampil['umur'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <?php echo $tampil['jenis_kelamin'] ?> </td>
    <td><a href="hapus_pelanggan.php?id=<?php echo $tampil['id_pelanggan']; ?>">Hapus</a>
       <a href="edit_pelanggan.php?id=<?php echo $tampil['id_pelanggan']; ?>">Edit</a></td>
</tr>

<?php
}
?>

</table>
<a href="input_pelanggan.php"> Tambahkan data baru </a>
</body>
</html>  