<html>
<a href="pegawai.php">Kembali</a>
<h3>Edit Pegawai </h3>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi, "select * from pegawai");
while ($tampil = mysqli_fetch_array($data )){
?>

<form method="post" action="edit_aksi_pegawai.php">
    <table>
        <tr>
            <td> id_pegawai </td>
            <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
        </tr>
        <tr>
            <td>nama </td>
            <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
        </tr>
        <tr>
            <td>alamat </td>
            <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>usia </td>
            <td><input type="text" name="usia" value="<?php echo $tampil['usia']; ?>"></td>
        </tr>
        <tr>
            <td>jenis_kelamin </td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SUBMIT"></td>
        </tr>
    </table>
</form>
<?php
}
?>
</html>