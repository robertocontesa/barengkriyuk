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
$nama_lengkap = $_POST['nama'];
$rasa = $_POST['rasa'];
$jumlah = $_POST['jumlah'];
date_default_timezone_set("Asia/Jakarta");
  $date = date('Y-m-d');
$status = "Proses Konfirmasi";

$simpan = mysql_query("INSERT INTO stokmasuk(nama_penginput, rasa, jumlah_input, tanggal) VALUES('$nama_lengkap','$rasa','$jumlah','$date')");
       if($simpan) {
         echo "<script>alert('Berhasil Tambah Stok !'); window.history.back()</script>";
       } else {
         echo "<script>alert('Gagal Tambah Stok !'); window.history.back()</script>";
       }

$simpan2 = mysql_query("UPDATE stokbarang SET stok=stok+$jumlah,jumlahmasuk=jumlahmasuk+$jumlah WHERE id_stok='$id'");
if($simpan2) {
         header("location:stokbarang?pesan=$rasa");
       } else {
         echo "<script>alert('Gagal Tambah Stok !'); window.history.back()</script>";
       } 

?>