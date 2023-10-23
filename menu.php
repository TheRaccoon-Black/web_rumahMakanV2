<?php session_start(); ?>
<?php include  "header.php"; ?>
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Menu Spesial</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu Spesial</h2>
						<p>setiap adalah dari yang indah untuk Rumah makan kami</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Bakso</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">sate</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">naspad</a>
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
								$s = mysqli_query($con,"select * from menu where kaategori='sate'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
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
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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
											<h5 align="center"><?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="tambah_keranjang.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&harga=<?php echo $r['harga']; ?>">pesan</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">pesan</a>
									<?php } ?></h5>
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

<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Review Pelanggan</h2>
						<p>"jika anda puas, beri kami review yang baik ya"</p>
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
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Marsha</strong></h5>
								<h6 class="text-dark m-0">Review : Good</h6>
								<p class="m-0 pt-3">
									makanan yang enak dan sehat

								</p>
							</div>
							
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">selanjutnya</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">sebelumnya</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
<?php include "footer.php" ?>	

