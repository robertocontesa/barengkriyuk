<?php
session_start();
if(@$_SESSION['member'] == @$_SESSION['kode_user']){
header("Location:halamanAdmin");
}

?>
<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'barengkriyuk';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database);
?>
<html>
<head>
    <title>Bareng Kriyuk</title>


    <link rel="stylesheet" href="style.css" type="text/css" />
 
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="art-headerobject2"></div>
<div>
                    <h1 align="center">DATA TRANSAKSI ANDA</h1>
     <hr color="pink">
                </div>

<br>
<br> 
<br><center>
<div class="demo-table">
<table  border='1' Width='1330'>  
<tr>
    <th width="26"> No </th>
    <th width="160"> No Order </th>
    <th width="160"> Nama Lengkap </th>
    <th width="66"> No HP </th>
    <th width="106"> Alamat </th>
    <th width="106"> Jumlah 1/100gram </th>
    <th width="83"> Rasa </th>
    <th width="74"> Subtotal </th>
    <th width="110"> Tanggal </th>
    <th width="150"> Status </th>
    <th width="150"> </th>
    
</tr>

<?php
$username=$_SESSION['username'];
$no ="1";  
// Perintah untuk menampilkan data
$queri="Select * From transaksi where username='$username'";  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
?>   
        <tr>
        <td><center><?php echo $no++; ?></td>
        <td><center><?php echo $data['no_order']; ?></center></td>
        <td><center><?php echo $data['nama_lengkap']; ?></center></td>
        <td><center><?php echo $data['nohp']; ?></center></td>
        <td><center><?php echo $data['alamat']; ?></center></td>
        <td><center><?php echo $data['jumlah']; ?></center></td>
        <td><center><?php echo $data['rasa']; ?></center></td>
        <td><center><?php echo $data['subtotal']; ?></center></td>
        <td><center><?php echo $data['tanggal']; ?></center></td>
        <td><center><?php echo $data['status']; ?></center></td>
        <td>
          <center><a class="tombol" href="konfirmasi.php?id=<?php echo $data['id_transaksi']; ?>">Konfirmasi</a></center>
        </td>
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
</body>
</html>
<?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "update"){
      echo "<script>alert('Proses Konfirmasi Berhasil !');</script>";
    }
  }
?>