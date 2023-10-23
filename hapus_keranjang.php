<?php $id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from tambah_keranjang where id='$id'");
header("location:keranjang.php");
?>