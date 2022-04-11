<?php

include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
	mysqli_query($con, "DELETE FROM account WHERE no_account = '$id'");
	header('location:akun.php');
}else
{
	header('location:akun.php');
}

?>