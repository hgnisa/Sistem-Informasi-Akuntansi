<?php

include "koneksi.php";
$id_supplier = $_POST['id_supplier'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

if (!empty($id_supplier) && !empty($nama) && !empty($alamat) && !empty($email) && !empty($no_hp))
{
mysqli_query($con, "UPDATE supplier SET id_supplier = '$id_supplier', nama = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp' WHERE id_supplier = '$id_supplier'");
	header('location:supplier.php');
}else
{
	header('location:supplier.php');
}
?>