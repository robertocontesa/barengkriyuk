<?php
session_start();
if(@$_SESSION['member'] == @$_SESSION['kode_user']){
header("Location:halamanAdmin");
}
?>
<?php 
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$no_order = $_POST['no_order'];
$username = $_SESSION["username"];
$nama_lengkap = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$namabank = $_POST['namabank'];
$namarekening = $_POST['namarekening'];
$norekening = $_POST['norekening'];
$rasa = $_POST['rasa'];
$jumlahtransfer = $_POST['jumlahtransfer'];
date_default_timezone_set("Asia/Jakarta");
  $date = date('Y-m-d');
$status = "Proses Konfirmasi";

$simpan = mysql_query("INSERT INTO konfirmasi(no_order, username, nama_lengkap, nohp, namabank, namarekening, norekening, rasa, jumlahtransfer, tanggal) VALUES('$no_order','$username','$nama_lengkap','$nohp','$namabank','$namarekening','$norekening','$rasa','$jumlahtransfer','$date')");
       if($simpan) {
         echo "<script>alert('Proses Konfirmasi !'); window.history.back()</script>";
       } else {
         echo "<script>alert('Konfirmasi GAGAL'); window.history.back()</script>";
       }

$simpan2 = mysql_query("UPDATE transaksi set status='$status' where id_transaksi='$id'");
if($simpan2) {
         header("location:DataTransaksiAnda?pesan=update");
       } else {
         echo "<script>alert('Konfirmasi GAGAL'); window.history.back()</script>";
       } 

?>