<?php
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$simpan2 = mysql_query("DELETE from stokmasuk where id_masuk='$id'");
if($simpan2) {
         header("location:datarestok?pesan=berhasil-hapus!");
       } else {
         echo "<script>alert('Gagal Hapus Transaksi!'); window.history.back()</script>";
       } 

?>