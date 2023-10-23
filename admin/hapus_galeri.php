<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from galeri where id='$id'");
header("location:lihat_galeri.php");


?>