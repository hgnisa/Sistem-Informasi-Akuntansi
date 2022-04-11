<?php
include "koneksi.php";
$id_customer = $_POST['id_customer'];
$nama_customer = $_POST['nama_customer'];
$noTelp_customer = $_POST['noTelp_customer'];

if (!empty($id_customer) && !empty($nama_customer) && !empty($noTelp_customer))
{
	mysqli_query($con, "INSERT INTO customer(id_customer, nama_customer,noTelp_customer)
	VALUES('$id_customer', '$nama_customer','$noTelp_customer')");
	header('location:customer.php');
}else
{
	header('location:customer.php');
}
?>