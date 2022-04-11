<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM penjualan WHERE No_Transaksi = '$id'");
	header('location:sale.php');
}else
{
	header('location:sale.php');
}

?>