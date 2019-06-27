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
										<a class="active">Formulir Order</a>
									</li>
                                    <div class="waktuorder">        
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
																	<div class="main_contenta">
                                                                    <center><h1>Formulir Order</h1></center>
                                                                       
                                                                        <div class="tentang-kami">					
<center><p> <form action="HsLBK001" method="post">
  <br>
  <table width="403">
  <tbody>
  <tr> 
    <td width="169" height="35"><h3>Nama Lengkap</h3></td>
    <td width="14"> <h3>:</h3> </td> 
        <td width="174"><h3><?php echo $_SESSION["nama"] ?></h3></td></tr>
  <tr>
    <td height="35"><h3>Rasa</h3></td><td> <h3>:</h3> </td> 
    <td><h3>ORIGINAL</h3></td></tr>
    <tr><td height="35"><h3>Harga</h3></td><td> <h3>:</h3> </td> <td><h3>Rp. 15.000 / 100 Gram</h3></td></tr>
  <tr><td height="35"><h3>Jumlah</h3></td><td> <h3>:</h3> </td> <td><h3><select name="jumlah" class="form-control">
		<option value="1">100 Gram (0,1kg)</option>
		<option value="5">500 Gram (0,5kg)</option>
		<option value="10">1000 Gram (1kg)</option>
		<option value="15">1500 Gram (1,5kg)</option>
		<option value="20">2000 Gram (2kg)</option>
		<option value="50">5000 Gram (5kg)</option>
	</select></h3></td></tr>
  <tr><td height="35"><h3>Biaya Pengiriman</h3></td><td> <h3>:</h3> </td> <td><h3>Rp. 7.000 (Promo)/kg</h3></td></tr>
  <tr><td height="35"><h3>Alamat Lengkap</h3></td><td> <h3>:</h3> </td> <td><h3><?php echo $_SESSION["alamat"] ?></h3></td></tr>
<tr><td></td><td></td><td colspan="2" align="right"><br><br>
      <input value="Order" id="btnSubmit" type="submit" class="tombol"> <input value="Batal" type="reset" class="tombol"></td></tr>
  </tbody>
  </table></p></center></div></form>
</form>
<br>
<br>
<center>
    <th width="0"> <a class="tombol" href="./">KEMBALI</a> </th>
<center>    

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


