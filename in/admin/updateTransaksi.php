<?php
session_start();
if(@$_SESSION['admin'] == @$_SESSION['kode_user']){
header("Location:index");
}
?>
<?php 
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$no_order = $_POST['noorder'];
$username = $_POST['username'];
$nama_lengkap = $_POST['nama'];
$rasa = $_POST['rasa'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$subtotal = $_POST['subtotal'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];

$simpan2 = mysql_query("UPDATE transaksi SET no_order='$no_order', username='$username', nama_lengkap='$nama_lengkap', rasa='$rasa', jumlah='$jumlah', alamat='$alamat', nohp='$nohp', subtotal='$subtotal', tanggal='$tanggal', status='$status' WHERE id_transaksi='$id'");
if($simpan2) {
         header("location:dataOrder?pesan=berhasil!");
       } else {
         echo "<script>alert('Gagal Update!'); window.history.back()</script>";
       } 

?>