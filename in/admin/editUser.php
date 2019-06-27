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
  $queri="select * from user where id_user='$id'";
  $hasil=MySQL_query ($queri);
while ($data = mysql_fetch_array ($hasil)){
?>
    <form method="post" action="updateUser.php">
      <table>
        <tr>      
          <td>Username</td>
          <td> : </td>
          <td>
            <input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
            <?php echo $data['username'];?>
        </tr>
        <tr>      
          <td>Nama Lengkap</td>
          <td> : </td>
          <td>
          <input type="text" name="nama" value="<?php echo $data['nama_lengkap']; ?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td> : </td>
          <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
        </tr>
        <tr>
          <td>No HP</td>
          <td> : </td>
          <td><input type="text" name="nohp" value="<?php echo $data['nohp']; ?>"></td>
        </tr>
          <tr>
          <td>Alamat</td>
          <td> : </td>
          <td><textarea name="alamat" cols="17" rows="5" value="alamat"><?php echo $data['alamat']; ?></textarea></td>
        </tr>
      </table>
      </div>
      <br>
      <br>
      <table>
<tr>
    <th width="0"> <input type="submit" class="tombol" value="UPDATE"></th>
    <th width="0"> <h5><a class="tombol" href="dataUser">KEMBALI</a></h5></th>
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