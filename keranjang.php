<?php session_start();
	$uid = $_SESSION['uid'];
 include "header.php"; ?>
<style type="text/css">
	tr{

	}
	tr:hover{
		background-color: lightgreen;
		color: black;

	}
</style>
<div style="height: 150px;"></div>
<div style="width: 90%; margin: 0 auto;">
	<center> <img src="cart.jpg" width="10%"> </center>
<center> <p style="font-size: 2.4em; color: red">Lihat produk yang dibeli disini</p> </center> 
	<div style="width: 90%; padding: 20px; text-align: right;">
			<a href="checkout.php"><img src="images/chcekout.png" width="40"></a>
			<a href="checkout.php">Check Out</a> 
		</div>
	<br>
	<div>
		<?php include "connect.php";
			$s = mysqli_query($con,"SELECT tambah_keranjang.harga, tambah_keranjang.kuant, tambah_keranjang.total,tambah_keranjang.id, menu.image
FROM tambah_keranjang
INNER JOIN menu ON tambah_keranjang.p_id=menu.id where tambah_keranjang.u_id='$uid'");
		?>
		<table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
		<tr><th>gambar</th>
			<th>harga</th>
			<th>kuantitas</th>
			<th>Total</th>
			<th>hapus</th>
		</tr>

		<?php
			while($r = mysqli_fetch_array($s))
			{
		 ?>
			<tr>
				<td align="right"><img src="admin/<?php echo $r['image']; ?>" width=100 height=100></td>
				<td><?php echo $r['harga']; ?></td>
				<td><?php echo $r['kuant']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><a href="hapus_keranjang.php?id=<?php echo $r['id']; ?>">Hapus</a></td>

			</tr>
			
		
		<?php
		}
		?>
		</table>	
		<div style="width: 90%; padding: 20px; text-align: right;">
			<a href="checkout.php"><img src="images/chcekout.png" width="40"></a>
			<a href="checkout.php">Check Out</a> 
		</div>
	</div>


</div>
<?php
include "footer.php";
?>