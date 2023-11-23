<html>

<a href="pelanggan.php"> Kembali</a>
<h3>Edit Pelanggan </h3>

<?php
include 'koneksi.php';
$id_pelanggan = $_GET['id'];
$data=mysqli_query($koneksi, "select * from pelanggan");
while ($tampil = mysqli_fetch_array($data )){
?>

<form method="post" action="edit_aksi_pelanggan.php">
    <table>
        <tr>
            <td> id_pelanggan </td>
            <td><input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
        </tr>
        <tr>
            <td>nama </td>
            <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
        </tr>
        <tr>
            <td>umur </td>
            <td><input type="text" name="umur" value="<?php echo $tampil['umur']; ?>"></td>
        </tr>
        <tr>
            <td>alamat </td>
            <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
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