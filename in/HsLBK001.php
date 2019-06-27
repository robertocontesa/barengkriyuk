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
	<div id="art-page-background-middle-texture">
		<div id="art-main">
			<div class="cleared reset-box"></div>
				<div class="art-box art-sheet">
					<div class="art-box-body art-sheet-body">
						<div class="art-header">
							<div class="art-headerobject"></div>
								<div class="art-logo">
									
									<h2 class="art-logo-text">Tersedia Bawang Goreng Dengan Berbagai Rasa <br> <center> Hanya Tersedia di Wilayah JABODETABEK 
									</center></h2>
								</div>											
						</div>
							<div class="cleared reset-box"></div>
						<div class="art-bar art-nav">
							<div class="art-nav-outer">
                            <ul class="art-hmenu">
                                    <li>
										<a href="./">Home</a>
									</li>
                                    <li>
										<a class="active">Pembayaran</a>
									</li>
                                    <div class="waktubayar">        
        <div align="right"> <script type="text/javascript">
		var d=new Date()
		var weekday=new
		Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu")
		var monthname=new
		Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")
		document.write(weekday[d.getDay()] + ", ")
		document.write(d.getDate() + " ")
		document.write(monthname[d.getMonth()] + " ")
		document.write(d.getFullYear())
		</script>
        </div>
        </div>
        							</li>
								</ul>
							</div>
						</div>
							<div class="cleared reset-box"></div>
								<div class="art-layout-wrapper">
									<div class="art-content-layout">
										<div class="art-content-layout-row">
											<div class="art-layout-cell art-sidebar1">
												<div class="art-box art-block">
													<div class="art-box-body art-block-body">
															
														<div class="art-box art-blockcontent">
														<div class="art-box-body art-blockcontent-body">
															
																	</p>
                                                                    <center>
                                                                    <h4>
                                                                    <?php echo $_SESSION["nama"] ?>
                                                                    <br>
                                                                    <br>
                                                                    <?php echo $_SESSION["no"] ?>
                                                                    <br>
                                                                    <br>
                                                                    <?php echo $_SESSION["alamat"] ?>
                                                                    </h4>
                                                                    <br>
                                                                    <a href="logout"> <input type="submit" name="Keluar" class="tombol" value="Keluar" /> </a> </center>                             
																<div class="cleared"></div>
														</div>
														</div>
															<div class="cleared"></div>
													</div>
												</div>
													<div class="art-box art-block">
														<div class="art-box-body art-block-body">
															
															 <div class="art-box art-blockcontent">
																<div class="art-box-body art-blockcontent-body">
																<div class="cleared"></div>
																</div>
															</div>
																<div class="cleared"></div>
														</div>
													</div>
												<div class="cleared"></div>
											</div>
												<div class="art-layout-cell art-content">
													<div class="art-box art-post">
														<div class="art-box-body art-post-body">
															<div class="art-post-inner art-article">
																<div class="art-postcontent">
																	<div class="main_content3">
                                                                       
                                                                        <div class="tentang-kami">					

<center><p>   <?php
   require_once("config.php");
   $jumlah = $_POST['jumlah'];
   $alamat = $_SESSION["alamat"];
   $rasa = "ORIGINAL";
   $nama_lengkap = $_SESSION["nama"];
   $nohp = $_SESSION["no"];
   $total = 15000*$jumlah;
   $biayapengiriman = 7000;
   if($jumlah > 10) { $biayapengiriman = 14000;}
   if($jumlah > 49) { $biayapengiriman = 35000;}
   $subtotal = $biayapengiriman+$total;
   date_default_timezone_set("Asia/Jakarta");
   $date = date('Y-m-d');
   $username = $_SESSION["username"];
   $status = "Belum Konfirmasi";

   $query =mysql_query("SELECT max(no_order) as maxKode FROM transaksi");
   $data = mysql_fetch_array($query);
   $noOrder = $data['maxKode'];
   $noUrut = (int) substr($noOrder, 8, 2);
   $noUrut++;
   $tahun=substr($date, 0, 4);
   $bulan=substr($date, 5, 2);
   $date2=substr($date, 8, 2);
   $id_Order = $tahun .$bulan .$date2 . sprintf("%02s", $noUrut);

   $update = mysql_query("UPDATE stokbarang SET stok=stok-$jumlah WHERE id_stok=1");
       if($update) {
         echo "<script>alert('Transaksi Diproses !');</script>";
       } else {
         echo "<script>alert('Transaksi GAGAL'); window.history.back()</script>";
       }
   
   $simpan = mysql_query("INSERT INTO transaksi(no_order, username, nama_lengkap, rasa, jumlah, alamat, nohp , total, subtotal, tanggal, status) VALUES('$id_Order','$username','$nama_lengkap','$rasa','$jumlah','$alamat','$nohp','$total','$subtotal','$date','$status')");
       if($simpan) {
         echo "<h2>Pembayaran</h2>";
       } else {
         echo "<script>alert('Transaksi GAGAL'); window.history.back()</script>";
       } 
?> 
										<br>
                                        <table width="415" border="0">
  <tr>
    <td width="162"><h3>Nama Lengkap</h3></td>
    <td width="12"><h3>:</h3></td>
    <td width="227"><h3><?php echo $_SESSION["nama"] ?></h3></td>
  </tr>
  <tr>
    <td><h3>No HP</h3></td>
    <td><h3>:</h3></td>
    <td><h3><?php echo $_SESSION["no"] ?></h3></td>
  </tr>
  <tr>
    <td><h3>Rasa</h3></td>
    <td><h3>:</h3></td>
    <td><h3>ORIGINAL</h3></td>
  </tr>
  <tr>
    <td><h3>Jumlah Barang</h3></td>
    <td><h3>:</h3></td>
    <td><h3><?php echo $jumlah?>00 Gram</h3></td>
  </tr>
<tr>
    <td><h3>Harga /100 Gram</h3></td>
    <td><h3>:</h3></td>
    <td><h3>15000</h3></td>
  </tr>
  <tr>
    <td><h3>Total</h3></td>
    <td><h3>:</h3></td>
    <td><h3><?php echo $total ?></h3></td>
  </tr>
  <tr>
    <td><h3>Biaya Pengiriman</h3></td>
    <td><h3>:</h3></td>
    <td><h3><?php echo $biayapengiriman ?> (JNE)</h3></td>
  </tr>
  <tr>
    <td><h3>Subtotal</h3></td>
    <td><h3>:</h3></td>
    <td><h3><?php echo $subtotal ?></h3></td>
  </tr>
  <tr>
    <td><h3>Alamat Lengkap</h3></td>
    <td><h3>:</h3></td>
    <td><h3><?php echo $alamat ?></h3></td>
  </tr>
</table> <br> <br>
		</table>
<h3> Silahkan melalukan pembayaran sebesar <?php echo $subtotal ?> <br>
ke salah satu Rekening kami disamping kanan.<br>
Paling Lambat 1 x 24jam.</h3> <br><br>
<h3> Jangan lupa melakukan KONFIRMASI setelah pembayaran</h3> <br> 
<a href="dataTransaksiAnda"><input value="Transaksi Anda" id="btnSubmit" type="submit" class="tombol"></a>

                                        
</p> </center> </div>
																		</div>
                                                                        </div>
																<div class="cleared"></div>
															</div>

																<div class="cleared"></div>
															</div>
														</div>
														<div class="art-box art-post">
															<div class="art-box-body art-post-body">
														<div class="art-post-inner art-article">
																		<div class="art-postcontent">
															<center><h1>Bareng Kriyuk</h1>
                                                                        <h4>Kavling Nambo Rt 3 Rw 4 No 15<br>
                                                                            Serpong , Banten <br>
                                                                            WA : 082164290707</h4></center>


																		</div>
																		<div class="cleared"></div>
																		</div>

																<div class="cleared"></div>
															</div>
														</div>

																				  <div class="cleared"></div>
																				</div>
																				<div class="art-layout-cell art-sidebar2">
														<div class="art-box art-block">
															<div class="art-box-body art-block-body">
																		<div class="art-bar art-blockheader">
																			<h3 class="t">Pembayaran</h3>
																		</div>
																		<div class="art-box art-blockcontent">
																			<div class="art-box-body art-blockcontent-body">
																		<div class="bannergroup_text">
																		<img src='images/sbca.png'><br>0321670022 a.n Bareng Kriyuk<br>
																		<img src='images/smandiri.png'><br>1110006039813 a.n Bareng Kriyuk<br>
																		<img src='images/sbri.png'><br>0669.01.004717.452 a.n Bareng Kriyuk<br>
																		<img src='images/sbni.png'><br>0669.01.004718.116 a.n Bareng Kriyuk<br>
																</div>                 
																								<div class="cleared"></div>
																			</div>
																		</div>
																<div class="cleared"></div>
															</div>
														</div>

														<div class="art-box art-block">
															<div class="art-box-body art-block-body">
																		<div class="art-box art-blockcontent">
																			<div class="art-box-body art-blockcontent-body">
																           <div class="cleared"></div>
																			</div>
																		</div>
																<div class="cleared"></div>
															</div>
														</div>


																				  <div class="cleared"></div>
											</div>
										</div>
									</div>
								</div>
									<div class="cleared"></div>
										<div class="art-footer">
											<div class="art-footer-body">

														<div class="art-footer-text-2">
														   <center><p>Copyright &copy; 2019 Bareng Kriyuk. All rights reserved.</p></center>
                                                           <div class="cleared"></div>
															<p class="art-page-footer">&nbsp;</p>
                                                        </div>
												<div class="cleared"></div>
											</div>
										</div>
								<div class="cleared"></div>
					</div>
				</div>
					<div class="cleared"></div>
		</div>
	</div>
</body>
</html>


