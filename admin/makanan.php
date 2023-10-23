<!--<script>
function 
</script>-->
<?php include "header.php"; ?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="content">
	<form action="" method="post" enctype="multipart/form-data">
	<table border=0 align="center" bgcolor="white" width="65%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15" >
	

	<tr align="center">
			<td class="title">Upload baru</td><td><a href="lihat_makanan.php" style="color: red; text-decoration: none;">Lihat semua makanan</a></td>
    </tr>
    

   <tr align="center">   
   		<td>Pilih kategori</td>
   	    <td> 
   	    	<select class="text" name="kat" onchange="showUser(this.value)">
   	    		<option value="bakso">Bakso</option>
   	    		<option value="naspad">Naspad</option>
   	    		<option value="sate">Sate</option>
   	    		<option value="minuman">Minuman</option>
   	    	</select>
   	    </td>

   	   <!--<tr align="center">
   	    	<td> Pilih kategori produk</td>
   	    	<td>
   	    		<div id="txtHint">Pilih kategori utama untuk menampilkan sub kategori</div>
</td>
   	   </tr> -->

   	   <tr align="center">
   	   	    <td> Masukkan nama makanan</td>
   	   	    <td><input type="text" name="judul" value="" placeholder="" class="text" required></td>
   	   </tr> 
	<tr align="center"> 
            <td> Masukkan detail makanan </td>
			<td><textarea rows="4" name="detail" cols="40" class="ar" style="background-color: black; color: white; padding: 10px;"></textarea></td>
	</tr>

	<tr align="center"> 
            <td> Masukkan harga makanan </td>
			<td> <input type="text" name="harga" class="text"> </td>
	</tr>

    <tr align="center"> 
            <td> Masukkan gambar makanan </td>
			<td><input type="File" name="img"  placeholder="" class="" required></td>
	</tr>

    <tr>    
    	<td colspan=2 align="center"> <input type="submit" name="s" value="Upload now" class="btn"> </td>
    </tr>

</table>
</form>
<?php
if(isset($_POST['s']))
{
		$kat = $_POST['kat'];
		$judul = $_POST['judul'];
		$det = $_POST['detail'];
		$harga = $_POST['harga'];
		$i = "mimg/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);
		include "connect.php";
		mysqli_query($con,"insert into menu (kategori,judul,deskr,harga,image) values('$kat','$judul','$det','$harga','$i')");
		echo "<div style='text-align:center; font-size:1.3em; color:red;'>Data berhasil ditambahkan </div>";
		
}
?>	
</div>
<?php include "footer.php"; ?>