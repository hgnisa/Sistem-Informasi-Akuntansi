<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM supplier WHERE id_supplier = '$id'");
	header('location:supplier.php');
}else
{
	header('location:supplier.php');
}

?>