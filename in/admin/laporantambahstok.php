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
  $no ='1';
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
                    <h1 align="center">LAPORAN TAMBAH STOK</h1>
     <hr color="pink">
                </div>
<br> <br>
<br><center>
<div class="demo-table">

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='1280'>  
<tr>
    <th width="24">No</th>
    <th width="216"> Nama Penginput </th>
    <th width="130"> Rasa </th>
    <th width="180"> Jumlah Input (1 = 100 Gram)</th>
    <th width="74"> Tanggal </th>

    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From stokmasuk" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array 
while ($data = mysql_fetch_array ($hasil)){
 ?>    
        <tr>
        
		<td><center><?php echo $no++; ?></center></td>
    <td><center><?php echo $data['nama_penginput']; ?></center></td>
		<td><center><?php echo $data['rasa']; ?></center></td>
		<td><center><?php echo $data['jumlah_input']; ?></center></td>
    <td><center><?php echo $data['tanggal']; ?></center></td>
    
        
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