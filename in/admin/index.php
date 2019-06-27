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
	<div id="art-page-background-middle-texture">
		<div id="art-main">
			<div class="cleared reset-box"></div>
				<div class="art-box art-sheet">
					<div class="art-box-body art-sheet-body">
						<div class="art-header">
							<div class="art-headerobjectadmin"></div>
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
										<a class="active">Admin</a>
									</li>
                                    <li>
                                    <div class="waktuadmin">        
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
                                                                    <a href="../logout"> <input type="submit" name="Keluar" class="tombol" value="Keluar" /> </a> </center>             
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
                                                            <div class="main_contentadmin">
																		
                                                                         <center>     
                                                                         <table width="500" border="0">
  <tr>
    <td width="250"><center><h3><a class="tombol1" href="DataOrder">DATA ORDER</a></center></h3></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><center><h3><a class="tombol1" href="DataKonfirmasi">DATA KONFIRMASI</a></center></h3></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td width="250"><center><h3><a class="tombol1" href="StokBarang">DATA STOK</a></center></h3></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><center><h3><a class="tombol1" href="DataUser">DATA USER</a></center></h3></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><center><h3><a class="tombol1" href="laporanTambahStok">LAPORAN TAMBAH STOK</a></center></h3></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><center><h3><a class="tombol1" href="laporanTransaksi">LAPORAN TRANSAKSI</a></center></h3></td>
  </tr>
  </table>
  </center>
                                                                         
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
																		<div class="art-box art-blockcontent">
																			<div class="art-box-body art-blockcontent-body">
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

