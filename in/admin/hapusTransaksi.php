<?php
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$simpan2 = mysql_query("DELETE from transaksi where id_transaksi='$id'");
if($simpan2) {
         header("location:dataorder?pesan=berhasil-hapus!");
       } else {
         echo "<script>alert('Gagal Hapus Transaksi!'); window.history.back()</script>";
       } 

?>