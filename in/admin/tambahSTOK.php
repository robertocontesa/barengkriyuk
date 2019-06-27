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
                    <h1 align="center">TAMBAH STOK</h1>
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
  $queri="select * from stokbarang where id_stok='$id'";
  $hasil=MySQL_query ($queri);
while ($data = mysql_fetch_array ($hasil)){
?>
    <form method="post" action="updatestok.php">
      <table> 
        <tr>
          <td>Nama Penginput</td>
          <td> : </td>
          <td>
          <input type="hidden" name="id" value="<?php echo $data['id_stok']; ?>">
          <input type="hidden" name="rasa" value="<?php echo $data['rasa']; ?>">
          <input type="hidden" name="nama" value="<?php echo $_SESSION["nama"]; ?>">
          <?php echo $_SESSION["nama"] ?></td>
        </tr>
        <tr>     
          <td>Rasa</td>
          <td> : </td>
          <td><?php echo $data['rasa']; ?></td>
        </tr>
        <tr><td height="35"><h3>Jumlah</h3></td><td> <h3>:</h3> </td> <td><h3><select name="jumlah" class="form-control" required>
    <option value="1">100 Gram (0,1kg)</option>
    <option value="5">500 Gram (0,5kg)</option>
    <option value="10">1000 Gram (1kg)</option>
    <option value="15">1500 Gram (1,5kg)</option>
    <option value="20">2000 Gram (2kg)</option>
    <option value="50">5000 Gram (5kg)</option>
  </select></h3></td></tr> 
      </table>
      <br>
      <br>
      <input class="tombol" type="submit" value="TAMBAH STOK">
    </form>
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