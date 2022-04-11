<?php

include "koneksi.php";
$id_employee = $_POST['id_employee'];
$nama_employee = $_POST['nama_employee'];
$noTelp_employee = $_POST['noTelp_employee'];

if (!empty($id_employee) && !empty($nama_employee) && !empty($noTelp_employee))
{
mysqli_query($con, "UPDATE employee SET id_employee = '$id_employee', nama_employee = '$nama_employee', noTelp_employee = '$noTelp_employee' WHERE id_employee = '$id_employee'");
	header('location:employee.php');
}else
{
	header('location:employee.php');
}
?>