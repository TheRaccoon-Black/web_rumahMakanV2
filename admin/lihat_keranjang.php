<?php
session_start();
if(isset($_SESSION['uid']) && !empty($_SESSION['uid']))
{
    include "header.php"; ?>
<div style="background-color: white; width: 98%; margin: 0 auto; ">
	<br>
	<?php include "connect.php";
	$pid = $_GET['pid'];
	$uid = $_GET['uid'];
		?>

	<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
		<tr>
			<th>NO</th>
			<th>ID USER</th>
			<th>ID produk</th>
			<th>Harga</th>
			<th>Quantitas</th>
			<th>Total</th>
			<th>Gambar</th>
			
			
		</tr>
		<?php 

		$s = mysqli_query($con,"SELECT tambah_keranjang.harga, tambah_keranjang.p_id, tambah_keranjang.kuant, tambah_keranjang.total,tambah_keranjang.id, checkout.nama, tambah_keranjang.u_id, menu.image
FROM tambah_keranjang
INNER JOIN checkout ON tambah_keranjang.p_id=checkout.p_id INNER JOIN menu on menu.id=checkout.p_id  where tambah_keranjang.u_id='$uid' and checkout.p_id='$pid'");


		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['u_id']; ?></td>
				<td><?php echo $r['p_id']; ?></td>
				<td><?php echo $r['harga']; ?></td>
				<td><?php echo $r['kuant']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><img src="<?php echo $r['image']; ?>" width=100 height=100></td>
			
		</tr>
		<?php
			}
		?>

	</table>
</div>

<?php include "footer.php"; ?>

<?php
}
else
{
    header("location:index.php");
}
?>
<?php /*session_start();
if(isset($_SESSION['uid']))
{

include "header.php"; ?>
<div style="background-color: white; width: 98%; margin: 0 auto; ">
	<br>
	<?php include "connect.php";
	$pid = $_GET['pid'];
	$uid = $_GET['uid'];
		?>

	<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
		<tr>
			<th>NO</th>
			<th>ID USER</th>
			<th>ID produk</th>
			<th>Harga</th>
			<th>Quantitas</th>
			<th>Total</th>
			<th>Gambar</th>
			
			
		</tr>
		<?php 

		$s = mysqli_query($con,"SELECT tambah_keranjang.harga, tambah_keranjang.p_id, tambah_keranjang.kuant, tambah_keranjang.total,tambah_keranjang.id, checkout.nama, tambah_keranjang.u_id, menu.image
FROM tambah_keranjang
INNER JOIN checkout ON tambah_keranjang.p_id=checkout.p_id INNER JOIN menu on menu.id=checkout.p_id  where tambah_keranjang.u_id='$uid' and checkout.p_id='$pid'");


		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['u_id']; ?></td>
				<td><?php echo $r['p_id']; ?></td>
				<td><?php echo $r['harga']; ?></td>
				<td><?php echo $r['kuant']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><img src="<?php echo $r['image']; ?>" width=100 height=100></td>
			
		</tr>
		<?php
			}
		?>

	</table>
</div>

<?php include "footer.php"; ?>

<?php
}
else
{
     header("location:index.php");
}*/
?>
