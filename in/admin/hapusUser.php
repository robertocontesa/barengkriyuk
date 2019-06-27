<?php
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$simpan2 = mysql_query("DELETE from user where id_user='$id'");
if($simpan2) {
         header("location:datauser?pesan=berhasil-hapus!");
       } else {
         echo "<script>alert('Gagal Hapus User!'); window.history.back()</script>";
       } 

?>