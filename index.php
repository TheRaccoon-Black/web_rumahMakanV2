<?php session_start(); ?>
<?php include "header.php"; ?>	
	<!-- Start slides -->
	<br>
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/gulai.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>selamat datang <br> rumah makan bundo(aka kel 6)</strong></h1>
							<p class="m-b-40">Rumah makan terkenal,   <br> 
							dengan berbagai masakan padangnya</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">MENU MAKANAN</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/rendang.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>	SUKA MAKAN?  <br> tepat kesini.</strong></h1>
							<p class="m-b-40">Rumah makan Bundo merupakan tempat makan yang dikelola secara turun temurun
<br> 
							dengan penyajian yang masih sama sejak dulu kal...</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Hubungi Kami</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/sate.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Selamat datang <br> makanan lezat yang dibuat oleh Ferdinand</strong></h1>
							<p class="m-b-40">Terasa nikmat didalam mulut<br> 
							Memang mantap..</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Review</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Rumah makan bunda</span></h1>
						<h4>Kami?</h4>
						<p>Rumah makan Bundo adalah tempat yang sangat nyaman dan ramah lingkungan untuk menikmati hidangan lezat yang diolah dengan cinta dan kasih sayang. Begitu memasuki pintu masuk, pengunjung akan disambut dengan aroma masakan yang menggugah selera dan dekorasi yang menarik perhatian. Meja-meja kayu yang dihiasi dengan bunga-bunga segar memberikan nuansa hangat dan santai di seluruh ruangan. Rumah makan Bundo juga menawarkan suasana yang cocok untuk berbagai acara, dari makan siang santai hingga pesta ulang tahun dengan keluarga dan teman-teman, 
 </p>
						<p>Di sini, pengunjung dapat menikmati berbagai hidangan tradisional Indonesia dengan rasa yang autentik dan memuaskan. Setiap hidangan dibuat dengan bahan-bahan segar dan diproses dengan cara yang tepat untuk menghasilkan cita rasa yang terbaik. Menu-menu khas seperti nasi goreng, sate ayam, dan gado-gado menjadi favorit pelanggan. Tidak hanya itu, para pengunjung juga dapat mencicipi berbagai hidangan khas daerah yang jarang ditemukan di tempat lain. Dengan pelayanan yang ramah dan sopan, serta harga yang terjangkau, Rumah makan Bundo adalah tempat yang cocok untuk mengisi perut dan menikmati suasana yang menyenangkan.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Contact Us</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/images.jpeg"  width="200%" height="200%" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" Jika kamu tidak bisa masak, beli disini saja "
					</p>
					<span class="lead">RM Bundo</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Nikmati kelezatannya</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">bakso</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">naspad</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">sate</a>
						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">minuman</a>
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
								$s = mysqli_query($con,"select * from menu where kategori='naspad'");
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
										<a href="login.php">tambah ke kerannjang</a>
									<?php } ?>


											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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
						<div class="tab-pane fade" id="v-pills-tava" role="tabpanel" aria-labelledby="v-pills-tava-tab">
							<div class="row">


							<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where kategori='minuman'");
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
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>galeri</h2>
						<p>foto dari makanan lezat yang dibuat oleh chef ferdinan disini</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					
					<?php
							include "connect.php";
							$s = mysqli_query($con,"select * from galeri order by id desc limit 6");
							while($r = mysqli_fetch_array($s))
							{
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
						
							<a class="lightbox" href="<?php echo "admin/".$r['image']; ?>">
								<img class="img-fluid"  src="<?php echo "admin/".$r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;"
								>

								
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>review pembeli</h2>
						<p>"sungguh pengalaman yang menyenanngkan untuk dapat makan di rumah makan yang lezat ini"</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<?php include "connect.php";
							$s = mysqli_query($con,"select * from review  limit 4");	
							 while($r = mysqli_fetch_array($s))
							 {
							 ?>
							<div class="carousel-item text-center ">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
									<?php echo $r['nama']; ?>
								</strong></h5>
								<h6 class="text-dark m-0">Review : <?php echo $r['review']; ?></h6>
								<p class="m-0 pt-3">
									<?php echo $r['deskr']; ?>
								</p>
							</div>
						<?php } ?>
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Nanda</strong></h5>
								<h6 class="text-dark m-0">Review : Good</h6>
								<p class="m-0 pt-3">
									makanan yang enak dan lezat

								</p>
							</div>
							
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">sebelumnya</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">selanjutnya</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
<?php include "footer.php"; ?>