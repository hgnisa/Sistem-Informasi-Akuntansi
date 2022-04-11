<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM pembelian WHERE No_Transaksi = '$id'");
	header('location:purchase.php');
}else
{
	header('location:purchase.php');
}

?>