<?php
session_start();
if(@$_SESSION['admin'] == @$_SESSION['kode_user']){
header("Location:index");
}

?>
<html>
<head>
    <title>Bareng Kriyuk</title>


    <link rel="stylesheet" href="style.css" type="text/css" />
 
</head>
<body>
<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'barengkriyuk';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
  $no='1';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="art-headerobject2"></div>
<div>
                    <h1 align="center">LAPORAN TRANSAKSI</h1>
     <hr color="pink">
                </div>
<br> <br>
<br><center>
<div class="demo-table">

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='1233'>  
<tr>
    <th width="10">No</th>
    <th width="100"> No Order </th>
    <th width="184"> Nama Lengkap</th>
    <th width="102"> Rasa </th>
    <th width="57"> Jumlah /100gram</th>
    <th width="123"> Alamat </th>
    <th width="111"> No HP </th>
    <th width="111"> Subtotal </th>
    <th width="59"> Tanggal </th>
    <th width="59"> Status </th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From transaksi where status='Sudah Sampai Tujuan'"; //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
?>    
        <tr>
        <td><center><?php echo $no++?></center></td>
        <td><center><?php echo $data['no_order']; ?></center></td>
		 <td><center><?php echo $data['nama_lengkap']; ?></center></td>
        <td><center><?php echo $data['rasa']; ?></center></td>
        <td><center><?php echo $data['jumlah']; ?></center></td>
		<td><center><?php echo $data['alamat']; ?></center></td>
		<td><center><?php echo $data['nohp']; ?></center></td>
		<td><center><?php echo $data['subtotal']; ?></center></td>
		<td><center><?php echo $data['tanggal']; ?></center></td>
    <td><center><?php echo $data['status']; ?></center></td>
        
        </tr> 
<?php        
}
?>
</table>
</div>
<br>
<br>
<table>
<tr>
    <th width="0"> <a class="tombol" href="./">KEMBALI</a> </th>
<tr>
</table>
<br>
<br>
<br>
<center><h1>Bareng Kriyuk</h1>
<h3>Kavling Nambo Rt 3 Rw 4 No 15<br>
Serpong , Banten <br>
WA : 082164290707</h2></center> <br><br>
                               <center><p><h3>Copyright &copy; 2019 Bareng Kriyuk. All rights reserved.</h3></p></center>
</center>
<br><br>
<?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "berhasil!"){
      echo "<script>alert('Berhasil Diupdate!');</script>";
    }else if($pesan == "berhasil-hapus!"){
      echo "<script>alert('Berhasil Dihapus !');</script>";
    }
  }
  ?>
</body>
</html>