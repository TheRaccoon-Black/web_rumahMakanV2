<?php session_start(); 
 include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>tambahkan ke keranjang </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">

	<form action="" method="post">
		
		<table align="center" border="1" cellspacing="14" cellpadding="12" style="color: black" >

			    <tr align="center">

			    	<td style="color: red">  ID Produk  </td>
			    	<td> <input type="hidden" name="pid"  value="<?php echo $_GET['pid']; ?>"><?php echo $_GET['pid']; ?></td>
			    	
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   ID pengguna </td>
			        <td> <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>"><?php echo $_GET['uid']; ?></td>
			    </tr>
			    <tr align="center">
			    	<td style="color: red">   Harga </td>
			        <td> <input type="hidden" name="harga" value="<?php echo $_GET['harga']; ?>"><?php echo $_GET['harga']; ?></td>
			    </tr>
				    <tr align="center">
			    	<td style="color: red">   Quantitas</td>
			        <td> <input type="number" name="kuant" value="" min=1 max=10 required></td>
			    </tr>

                <tr align="center">
                	<td colspan="4"> <input type="submit" name="sb" value="Tambahkan kekeranjang"></td>
                </tr>
		</table>
	</form>		
	<?php
	if(isset($_POST['sb']))
{
    $pid = $_POST['pid'];
    $uid = $_POST['uid'];
    $harga = $_POST['harga'];
    $kuant = $_POST['kuant'];
    $total  = $harga*$kuant;

    
    include "connect.php";
    mysqli_query($con,"INSERT INTO tambah_keranjang (p_id, u_id, harga, kuant, total, tanggal, bulan, tahun) 
                       VALUES ('$pid', '$uid', '$harga', '$kuant', '$total', DAY(CURDATE()), MONTH(CURDATE()), YEAR(CURDATE()))")
            or die(mysqli_error($con));
    
    echo "<script>alert('berhasil ditambahkan')</script>";
}?>

			<!--
			<?php
			#if(isset($_POST['sb']))
			/*{
				$pid = $_POST['pid'];
				$uid = $_POST['uid'];
				$harga = $_POST['harga'];
				$kuant = $_POST['kuant'];
				$total  = $harga*$kuant;

				include "connect.php";
				mysqli_query($con,"insert into tambah_keranjang(p_id,u_id,harga,kuant,total ) values('$pid','$uid','$harga','$kuant','$total')") or die(mysqli_error($con));
				echo "<script>alert('berhasil ditambahkan')</script>";

			}*/

			?>
			-->




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>