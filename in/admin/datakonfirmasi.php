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
                    <h1 align="center">DATA KONFIRMASI</h1>
     <hr color="pink">
                </div>
<br> <br>
<br><center>
<div class="demo-table">

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='1180'>  
<tr>
    <th width="10">No</th>
    <th width="121"> No Order </th>
    <th width="121"> Username </th>
    <th width="216"> Nama Lengkap </th>
    <th width="66"> No HP </th>
    <th width="116"> Nama Bank </th>
    <th width="192"> Nama Rekening </th>
    <th width="192"> No Rekening </th>
    <th width="193"> Rasa </th>
    <th width="180"> Jumlah Transfer </th>
    <th width="74"> Tanggal </th>
    <th width="74"></th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From konfirmasi" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
?>    
        <tr>
        <td><center><?php echo $no++?></center></td>
        <td><center><?php echo $data['no_order']; ?></center></td>
        <td><center><?php echo $data['username']; ?></center></td>
		 <td><center><?php echo $data['nama_lengkap']; ?></center></td>
        <td><center><?php echo $data['nohp']; ?></center></td>
        <td><center><?php echo $data['namabank']; ?></center></td>
		<td><center><?php echo $data['namarekening']; ?></center></td>
    <td><center><?php echo $data['norekening']; ?></center></td>
		<td><center><?php echo $data['rasa']; ?></center></td>
		<td><center><?php echo $data['jumlahtransfer']; ?></center></td>
		<td><center><?php echo $data['tanggal']; ?></center></td>
    <td><center><a class="tombol" href ="hapusKonfirmasi.php?id=<?php echo $data['id_konfirmasi']; ?>" onclick="return confirm('Hapus No Order <?php echo $data['no_order']; ?> ?');">Hapus</a></center></td>
        
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