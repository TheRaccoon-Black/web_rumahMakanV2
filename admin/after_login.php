<?php include "header.php"; ?>
<div class="content">
	<br><br>
	<?php include  "connect.php"; ?>
	<table border=1 cellpadding="6" cellspacing="8">
		<tr>
			 <th colspan="8">Pemesanan</th>
		</tr>
		<tr>
			<th>Id Produk</th>
			<th>Id User</th>
			<th>Nama Pelanggan</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Lihat Pesanan</th>
		</tr>
		<?php
		$s = mysqli_query($con,"select * from checkout");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
			<td><?php echo $r['p_id']; ?></td>
			<td><?php echo $r['u_id']; ?></td>
			<td><?php echo $r['nama']; ?></td>
			<td><?php echo $r['hp']; ?></td>
			<td><?php echo $r['email']; ?></td>
			<td><?php echo $r['lokasi']; ?></td>
			<td><a href="lihat_keranjang.php?pid=<?php echo $r['p_id']; ?>&uid=<?php echo $r['u_id']; ?>">Lihat Pesanan</a></td>
		<?php
		}
		?>
	</table>
</div>
<?php include "footer.php"; ?>