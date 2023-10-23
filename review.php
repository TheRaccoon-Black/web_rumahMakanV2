<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<center> <img src="feedback.jpg" style="background-color: red"> </center>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
						<p>kepuasan anda adalah pujian bagi kami</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form  action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Nama Kamu" required data-error="Silahkan masukkan Nama">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" name="rev" required data-error="Please Select Person">
									  <option value="Luar Biasa">Luar Biasa</option>
									  <option value="Bagus">Bagus</option>
									  <option value="Jelek">Jelek</option>
									  <option value="Sangat jelek">Sangat Jelek</option>
									  
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Pesan/review" rows="4" name="desc" data-error="Tulis Pesanmu" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button name="sb" class="btn btn-common" id="submit" type="submit">Kirim</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
					<?php
					if(isset($_POST['sb']))
					{
						$nm = $_POST['name'];
						$rev = $_POST['rev'];
						$des = $_POST['desc'];
						include "connect.php";
						mysqli_query($con,"insert into review(nama, review, deskr) values('$nm','$rev','$des')");
						echo "<h2 style='color:tomato; text-align:center;'>nambah data berhasil</h2>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>