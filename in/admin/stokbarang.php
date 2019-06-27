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
  $no ="1";
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
                    <h1 align="center">STOK BARANG</h1>
     <hr color="pink">
                </div>
<br> <br>
<br><center>
<div class="demo-table">

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='1000'>  
<tr>
    <th width="12"> No </th>
    <th width="80"> Kode Barang </th>
    <th width="54"> Rasa </th>
    <th width="42"> Stok (1/100gram) </th>
    <th width="150"> Total Stok (1/100gram)</th>
    <th width="40"></th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From stokbarang" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
?>     
        <tr>
        <td><center><?php echo $no++; ?></center></td>
		    <td><center><?php echo $data['kodebarang']; ?></center></td>
        <td><center><?php echo $data['rasa']; ?></center></td>
        <td><center><?php echo $data['stok']; ?></center></td>
        <td><center><?php echo $data['jumlahmasuk']; ?></center></td>
        <td><center><a class="tombol" href="tambahSTOK.php?id=<?php echo $data['id_stok']; ?>">Tambah</a></center></td>
<?php
}
?>
</table>
</div>
<br>
<br>
<br>
<table>
<tr>
    <th width="54"> <a class="tombol" href="./">KEMBALI</a> </th>
<tr>
</table>
  <?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "ORIGINAL"){
      echo "<script>alert('Penambahan Stok Rasa ORIGINAL Berhasil !');</script>";
    }else if($pesan == "PEDAS"){
      echo "<script>alert('Penambahan Stok Rasa PEDAS Berhasil !');</script>";
    }else if($pesan == "BBQ"){
      echo "<script>alert('Penambahan Stok Rasa BBQ Berhasil !');</script>";
    }
  }
  ?>
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