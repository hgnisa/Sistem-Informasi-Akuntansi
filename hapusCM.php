<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM customer WHERE id_customer = '$id'");
	header('location:customer.php');
}else
{
	header('location:customer.php');
}

?>