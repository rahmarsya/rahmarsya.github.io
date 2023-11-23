<html>

<a href="transaksi.php"> Kembali</a>
<h3>Edit Pegawai </h3>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi, "select * from transaksi");
while ($tampil = mysqli_fetch_array($data )){
?>

<form method="post" action="edit_aksi_transaksi.php">
    <table>
        <tr>
            <td> id_transaksi </td>
            <td><input type="number" name="id_transaksi" value="<?php echo $tampil['id_transaksi']; ?>"></td>
        </tr>
        <tr>
            <td> id_pelanggan </td>
            <td><input type="number" name="id_transaksi" value="<?php echo $tampil['id_transaksi']; ?>"></td>
        </tr>
        <tr>
            <td> id_pegawai </td>
            <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
        </tr>
        <tr>
            <td>tipe_kamar </td>
            <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>check_in </td>
            <td><input type="text" name="check_in" value="<?php echo $tampil['check_in']; ?>"></td>
        </tr>
        <tr>
            <td>check_out </td>
            <td><input type="text" name="check_out" value="<?php echo $tampil['check_out']; ?>"></td>
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