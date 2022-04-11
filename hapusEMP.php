<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM employee WHERE id_employee = '$id'");
	header('location:employee.php');
}else
{
	header('location:employee.php');
}

?>