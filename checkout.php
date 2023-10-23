<?php session_start();
include "header.php";
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">
		
<?php include  "connect.php"; ?>

	<form action="order.php" method="post">

		<table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
          <tr>
			<th> <h3 align="center" style="font-size: 1.3em;">Isi data dibawah untuk memproses pesanan kamu</h3> </th>
		<br>
            </tr>
			    <tr align="center">

			    	<td style="color: red">  Masukkan nama  <br>
			        <input type="text" name="nm" placeholder="Nama kamu" style="width: 100%; padding: 10px; color: orange; background-color: black" required="" pattern="[a-z,A-Z]*"></td>
			    		
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Masukkan nomor HP <br>
			        <input type="no" name="mo" placeholder="NO HP kamu" style="width: 100%; padding: 10px; color: orange; background-color: black" required="" pattern="\d{10}"></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Masukkan alamat email <br>
			        <input type="Email" name="em" placeholder="Email kamu" style="width: 100%; padding: 10px; color: orange; background-color: black"></td>
			    </tr>

                <tr align="center">
                	<td style="color: red"> Masukkan Alamat <br>
                 <input type="text" name="ad" placeholder="alamat kamu" style="width: 100%; padding: 50px; color: orange; background-color: black">
                </tr>	

                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" value="Konfirmasi" style="height: 50px; background-color:lightgreen; color: black; padding: 10px; width: 30%;"> </td>
                	
                </tr>

                		    </table>	
			</form>
		           <br> <br>



	</div>
</div>


<?php include "footer.php"; ?>