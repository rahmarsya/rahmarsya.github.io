<html>
table kelas
<table border="1">
  <tr>
        <td> kd_kelas </td>
        <td> kelas </td>
  </tr>   

<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from kelas");
while($tampil=mysqli_fetch_array($data)){
?>
<tr> 
    <td> <?php echo $tampil['kd_kelas'] ?> </td>
    <td> <?php echo $tampil['kelas'] ?> </td>
</tr>

<?php
}
?>

</table>
</html>