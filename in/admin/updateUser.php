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
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];

$simpan2 = mysql_query("UPDATE user SET nama_lengkap='$nama_lengkap', email='$email', nohp='$nohp', alamat='$alamat' WHERE id_user='$id'");
if($simpan2) {
         header("location:dataUser?pesan=berhasil!");
       } else {
         echo "<script>alert('Gagal Update!'); window.history.back()</script>";
       } 

?>