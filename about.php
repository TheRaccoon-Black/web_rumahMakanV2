<?php include "header.php"; ?>
	<!-- Start header -->
	<img src="images/banner_about_us.jpg" width="100%">
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Selamat datang  <span>di Rumah Makan Bundo</span></h1>
						<h4>Sedikit Cerita</h4>
						<p> Rumah makan Bundo adalah tempat yang sangat nyaman dan ramah lingkungan untuk menikmati hidangan lezat yang diolah dengan cinta dan kasih sayang. Begitu memasuki pintu masuk, pengunjung akan disambut dengan aroma masakan yang menggugah selera dan dekorasi yang menarik perhatian. Meja-meja kayu yang dihiasi dengan bunga-bunga segar memberikan nuansa hangat dan santai di seluruh ruangan. Rumah makan Bundo juga menawarkan suasana yang cocok untuk berbagai acara, dari makan siang santai hingga pesta ulang tahun dengan keluarga dan teman-teman.</p>
						<p> Di sini, pengunjung dapat menikmati berbagai hidangan tradisional Indonesia dengan rasa yang autentik dan memuaskan. Setiap hidangan dibuat dengan bahan-bahan segar dan diproses dengan cara yang tepat untuk menghasilkan cita rasa yang terbaik. Menu-menu khas seperti nasi goreng, sate ayam, dan gado-gado menjadi favorit pelanggan. Tidak hanya itu, para pengunjung juga dapat mencicipi berbagai hidangan khas daerah yang jarang ditemukan di tempat lain. Dengan pelayanan yang ramah dan sopan, serta harga yang terjangkau, Rumah makan Bundo adalah tempat yang cocok untuk mengisi perut dan menikmati suasana yang menyenangkan.</p>
						<!--<a class="btn btn-lg btn-circle btn-outline-new-white" href="#"> Comment</a> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/images.jpeg" style="height: 450px; width: 100%" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<p>Rumah makan Bundo merupakan tempat yang nyaman dan ramah lingkungan untuk menikmati hidangan lezat yang dibuat dengan cinta dan kasih sayang. Begitu memasuki pintu, para pelanggan disambut dengan aroma makanan yang menggoda selera dan dekorasi yang menarik perhatian. Meja-meja kayu yang dihiasi bunga-bunga segar memberikan nuansa hangat dan santai di seluruh ruangan. Rumah makan Bundo juga cocok untuk berbagai acara, mulai dari makan siang santai hingga pesta ulang tahun beRpama keluarga dan teman-teman. </p>
						<p>i sini, pengunjung dapat menikmati berbagai hidangan tradisional Indonesia yang benar-benar otentik dan memuaskan. Setiap hidangan dibuat dengan bahan-bahan segar dan diproses secara tepat untuk menghasilkan rasa yang kaya dan kompleks. Hidangan-hidangan khas seperti nasi goreng, sate ayam, dan gado-gado menjadi favorit pelanggan. Selain itu, para pengunjung juga dapat menikmati hidangan khas daerah yang jarang ditemukan di tempat lain. Dilengkapi dengan layanan yang sopan dan ramah, serta harga yang ekonomis, Rumah makan Bundo adalah tempat yang ideal untuk memuaskan rasa lapar dan menikmati suasana yang menyenangkan.</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu Spesial</h2>
						<p>Pastinya membuat liur mengalir deras</p>
					</div>
				</div>
			</div>
				
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Bakso</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Sate</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Naspad</a>
						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">Minuman</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['judul']; ?></h4>
											<p><?php echo $r['deskr']; ?></p>
											<p>Rp <?php echo $r['harga']; ?> /-</p>
											<h5 align="center">
									<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="tambah_keranjang.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&harga=<?php echo $r['harga']; ?>">pesan</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">pesan</a>
									<?php } ?>

										</div>
									</div>
								</div>
								<?php } ?>
							</div>	
						</div>


						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">


							<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where kategori='bakso'");
								while($r = mysqli_fetch_array($s))
								{	
								?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['judul']; ?></h4>
											<p><?php echo $r['deskr']; ?></p>
											<h5>Rp <?php echo $r['harga']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="tambah_keranjang.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&harga=<?php echo $r['harga']; ?>">pesan</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">pesan</a>
									<?php } ?>




											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
								
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where kategori='sate'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['judul']; ?></h4>
											<p><?php echo $r['deskr']; ?></p>
											<h5>Rp <?php echo $r['harga']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="tambah_keranjang.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&harga=<?php echo $r['harga']; ?>">pesan</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">pesan</a>
									<?php } ?>


											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>								

	<!-- End Menu -->
	
	<?php include "footer.php" ; ?>