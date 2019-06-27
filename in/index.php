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
										<a href="./" class="active">Home</a>
									</li>			
									<li>
										<a href="DataTransaksiAnda">Transaksi Anda</a>
									</li>
                                    <li>
                                    <div class="waktu01">        
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
																	<div class="main_content">
																		<div class="bunga001">							
																			<div class="menu_content"></div>
																				<div class="judul_content">
																						<ul>
																							<li><h3><a>Rasa : ORIGINAL</a></h3></li>
																						</ul>
																				</div>
                                                                                <div class="judul_contenta">
																						<ul>
																							<li><h3><a href="BK001">Order</a></h3></li>
																						</ul>
																				</div>
																		</div>						
																		<div class="bunga002">
																		<div class="menu_content2"></div>
																					<div class="judul_content2">
																						<ul>
																							<li><a>Rasa : PEDAS</a></li>
																						</ul>
																					</div>
                                                                                    <div class="judul_contentb">
																						<ul>
																							<li><h3><a href="BK002">Order</a></h3></li>
																						</ul>
																				</div>

																				</div>
																				
																				<div class="bunga003">							
																					<div class="menu_content3"><h4></h4></div>
																					<div class="judul_content3">
																						<ul>
																							<li><a>Rasa : BBQ</a></li>
																						</ul>
																					</div>
                                                                                    <div class="judul_contentc">
																						<ul>
																							<li><h3><a href="BK003">Order</a></h3></li>
																						</ul>
																				</div>

																				</div>
									
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
															<TABLE width="100%" border="0">
															<tr>
																<td colspan='4'><h2>Jasa Pengiriman</h2><img src='images/JasaPengiriman.png' height="60" width="314"></td>
															</tr>
															</TABLE>


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

