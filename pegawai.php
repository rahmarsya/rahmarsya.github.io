<html>

<table border="1">
  <tr>
        <td> id_pegawai </td>
        <td> nama </td>
        <td> alamat </td>
        <td> usia </td>
        <td> jenis_kelamin </td>
        <td> aksi </td>
  </tr>   

<?php
include "koneksi.php";
$data= mysqli_query($koneksi,"select * from pegawai");
while ($tampil = mysqli_fetch_array($data)){
?>

<tr> 
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['nama'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <?php echo $tampil['usia'] ?> </td>
    <td> <?php echo $tampil['jenis_kelamin'] ?> </td>
    <td><a href="hapus_pegawai.php?id=<?php echo $tampil['id_pegawai']; ?>">Hapus</a>
       <a href="edit_pegawai.php?id=<?php echo $tampil['id_pegawai']; ?>">Edit</a></td>
</tr>

<?php
}
?>

</table>
<a href="input_pegawai.php"> Tambahkan data baru </a>
</html>  