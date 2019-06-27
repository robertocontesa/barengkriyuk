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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="art-headerobject2"></div>
<div>
                    <h1 align="center">Edit Orderan</h1>
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
    <form method="post" action="updateTransaksi.php">
      <table>
        <tr>      
          <td>No Order</td>
          <td> : </td>
          <td>
            <input type="hidden" name="id" value="<?php echo $data['id_transaksi']; ?>">
            <input type="hidden" name="username" value="<?php echo $data['username']; ?>">
            <input type="text" name="noorder" value="<?php echo $data['no_order']; ?>"></td>
        </tr>
        <tr>      
          <td>Nama Lengkap</td>
          <td> : </td>
          <td><input type="text" name="nama" value="<?php echo $data['nama_lengkap']; ?>"></td>
        </tr>
        <tr>
          <td>Rasa</td>
          <td> : </td>
          <td><input type="text" name="rasa" value="<?php echo $data['rasa']; ?>"></td>
        </tr>
        <tr>
          <td>Jumlah</td>
          <td> : </td>
          <td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> : </td>
          <td><textarea name="alamat" cols="17" rows="5" value="alamat"><?php echo $data['alamat']; ?></textarea></td>
        </tr>
        <tr>
          <td>No HP</td>
          <td> : </td>
          <td><input type="text" name="nohp" value="<?php echo $data['nohp']; ?>"></td>
        </tr>
        <tr>
          <td>Subtotal</td>
          <td> : </td>
          <td><input type="text" name="subtotal" value="<?php echo $data['subtotal']; ?>"></td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td> : </td>
          <td><input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
        </tr>
        <tr>
          <td>Status</td>
          <td> : </td>
          <td><select class="form-control" name="status">
              <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
              <option></option>
              <option value="Konfirmasi Ulang">Konfirmasi Ulang</option>
              <option value="Belum Konfirmasi">Belum Konfirmasi</option>
              <option value="Proses Konfirmasi">Proses Konfirmasi</option>
              <option value="Terkonfirmasi">Terkonfirmasi</option>
              <option value="Proses Pengiriman">Proses Pengiriman</option>
              <option value="Sudah Sampai Tujuan">Sudah Sampai Tujuan</option>
              </select></td>
        </tr>  
      </table>
      </div>
      <br>
      <br>
      <table>
<tr>
    <th width="0"> <input type="submit" class="tombol" value="UPDATE"></th>
    <th width="0"> <h5><a class="tombol" href="dataOrder">KEMBALI</a></h5></th>
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