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
										<a href="./">Dashboard</a>
									</li>
                                    <li>
										<a href="Register">Pendaftaran Akun</a>
									</li>
                                    <div class="waktu2">        
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
														<div class="art-bar art-blockheader">
															<h3 class="t">Login Customer</h3>
														</div>
														<div class="art-box art-blockcontent">
														<div class="art-box-body art-blockcontent-body">
															<form action="login.php" method="post" onSubmit="return validasi()">
																<fieldset class="input" style="border: 0 none;">
																	<p id="form-login-username">
																		  <label for="modlgn_username">Username</label>
																		  <br />
																		  <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" size="18" />
																	</p>
																	<p id="form-login-password">
																		  <label for="modlgn_passwd">Password</label>
																		  <br />
																		  <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" alt="password" />
																	</p>
																	<p id="form-login-remember">&nbsp;
																	</p>
                                                                    <input type="submit" name="Keluar" class="tombol" value="Masuk" /> 
																</fieldset>
																</form>                
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
																	<div class="main_content4">
                                                                       <br>
                                                                       <br>
                                                                        <div class="tentang-kami">					
<center><p>   <?php
   require_once("config.php");
   $nama_lengkap = $_POST['nama_lengkap'];
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $email = $_POST['email'];
   $nohp = $_POST['nohp'];
   $alamat = $_POST['alamat'];
   $level = 'Member';
   $kode_user = '2';
   
   $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$md5=md5($pass);
   if(mysql_num_rows($cekuser) > 0) {
     echo "<script>alert('Username Telah Dipakai !'); window.history.back() </script>";
   } else {
     if(!$nama_lengkap || !$username || !$md5 || !$email || !$nohp ) {
       header("Location:Register");
     } else {
       $simpan = mysql_query("INSERT INTO user(nama_lengkap, username, password, email, nohp, alamat, level, kode_user) VALUES('$nama_lengkap','$username','$md5','$email','$nohp','$alamat','$level','$kode_user')");
       if($simpan) {
         echo "<div align='center'><h1>Pendaftaran Berhasil !</h1></div> <br>";
       } else {
         echo "<script>alert('Pendaftaran GAGAL !'); window.history.back() </script>";
       }
     }
   }
?> </p> </center> </div>
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
                                                                            Serpong , Banten</h4></center>


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


