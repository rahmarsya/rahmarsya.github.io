<html>
<a href="kamar.php"> Kembali </a>
<h3>Edit Kamar </h3>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi, "select * from kamar");
while ($tampil = mysqli_fetch_array($data )){
?>

<form method="post" action="edit_aksi_kamar.php">
    <table>
        <tr>
            <td> id_kamar </td>
            <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>tipe_kamar </td>
            <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>harga </td>
            <td><input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
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