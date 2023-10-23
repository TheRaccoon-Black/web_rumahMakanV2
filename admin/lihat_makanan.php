<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1.2em;
		color: #26947e;


	}
	tr:hover{
		background-color: black;
		color: white;
	

	}
	th{
		color: blue;
		font-size: 1.3em;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}


</style>
<div class="content">
	<table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; font-family: times new roman; background-color:WHITE">

		<tr>
			<th>JUDUL</th>
			<th>DESKRIPSI</th>
			<th>HARGA</th>
			<th>GAMBAR</th>
			<th>HAPUS</th>
		</tr>
		<?php 
			$s = mysqli_query($con,"select * from menu");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['judul']; ?></td>
					<td><?php echo $r['deskr']; ?></td>
					<td><?php echo $r['harga']; ?></td>
					<td><img src="<?php echo $r['image']; ?>" width=70 height=70></td>
					<td><a href="hapus_makanan.php?a=<?php echo $r['id']; ?>" class="del">HAPUS</a></td>
				</tr>	
		<?php	
			}
		?>


	</table>	


</div>
<?php include "footer.php"; ?>