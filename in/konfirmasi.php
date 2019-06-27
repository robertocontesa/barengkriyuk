<?php
session_start();
if(@$_SESSION['member'] == @$_SESSION['kode_user']){
header("Location:halamanAdmin");
}
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
                    <h1 align="center">KONFIRMASI</h1>
     <hr color="pink">
                </div>
<br> <br>
<br><center>
<div class="demo-table">
  <?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'barengkriyuk';
  $id = $_GET['id'];  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
  $queri="select * from transaksi where id_transaksi='$id'";
  $hasil=MySQL_query ($queri);
while ($data = mysql_fetch_array ($hasil)){
?>
    <form method="post" action="updatekonfirmasi.php">
      <table>
        <tr>      
          <td>Nama</td>
          <td> : </td>
          <td>
            <input type="hidden" name="id" value="<?php echo $data['id_transaksi']; ?>">
            <input type="hidden" name="no_order" value="<?php echo $data['no_order']; ?>">
            <input type="hidden" name="nama" value="<?php echo $data['nama_lengkap']; ?>">
            <input type="hidden" name="nohp" value="<?php echo $data['nohp']; ?>">
            <input type="hidden" name="rasa" value="<?php echo $data['rasa']; ?>">
            <input type="hidden" name="alamat" value="<?php echo $data['alamat']; ?>">
            <?php echo $data['nama_lengkap']; ?>
          </td>
        </tr>
        <tr>
          <td>No HP</td>
          <td> : </td>
          <td><?php echo $data['nohp']; ?></td>
        </tr>
        <tr>
          <td>Rasa</td>
          <td> : </td>
          <td><?php echo $data['rasa']; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> : </td>
          <td><?php echo $data['alamat']; ?></td>
        </tr>
        <tr>
          <td>Nama Bank</td>
          <td> : </td>
          <td><input type="text" name="namabank"></td>
        </tr>
        <tr>
          <td>Nama Rekening</td>
          <td> : </td>
          <td><input type="text" name="namarekening"></td>
        </tr>
        <tr>
          <td>No Rekening</td>
          <td> : </td>
          <td><input type="text" name="norekening"></td>
        </tr>
        <tr>
          <td>Jumlah Transfer</td>
          <td> : </td>
          <td><input type="text" name="jumlahtransfer"></td>
        </tr> 
      </table>
      </div>
      <br>
      <br>
      <table>
<tr>
    <th width="0"> <input type="submit" class="tombol" value="KONFIRMASI"></th>
    <th width="0"> <h5><a class="tombol" href="dataTransaksiAnda">KEMBALI</a></h5></th>
<tr>
</table>
    <?php 
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