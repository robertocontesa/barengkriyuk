<?php 
include 'config.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
$akun = mysql_fetch_array($login);
$level = $akun['level'];
$nama = $akun['nama_lengkap'];
$alamat = $akun['alamat'];
$no = $akun['nohp'];

if($cek > 0){
	session_start();
	@$_SESSION['username'] = $username;
	@$_SESSION['nama'] = $nama;
	@$_SESSION['alamat'] = $alamat;
	@$_SESSION['no'] = $no;
	if($level == 'Admin'){
	@$_SESSION['admin'] = $akun['kode_user'];
	echo "<script>alert('Anda Sukses Login');</script>";
	header("location:in/admin");
	}
	elseif($level == 'Member'){
	@$_SESSION['member'] = $akun['kode_user'];
	header("location:in");
	}
}else{
	echo "<script>alert('Username atau Password tidak cocok !'); window.history.back()</script>";	
}

?>