<?php ob_start();?>
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
<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='1233'>  
<tr>
    <th width="10">NO</th>
    <th width="100"> NO ORDER </th>
    <th width="184"> NAMA LENGKAP</th>
    <th width="102"> RASA </th>
    <th width="57"> JUMLAH (1=100Gram)</th>
    <th width="123"> ALAMAT </th>
    <th width="111"> NO HP </th>
    <th width="111"> SUBTOTAL </th>
    <th width="59"> TANGGAL </th>   
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
        
        </tr> 
<?php        
}
?>
</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Laporan.pdf', 'D');
?>