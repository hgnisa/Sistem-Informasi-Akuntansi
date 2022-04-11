<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM barang WHERE id_barang = '$id'");
	header('location:inventory.php');
}else
{
	header('location:inventory.php');
}

?>