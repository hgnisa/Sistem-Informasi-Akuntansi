<?php

include "koneksi.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga= $_POST['harga'];

if (!empty($id_barang) && !empty($nama_barang) && !empty($stok) && !empty($harga))
{
mysqli_query($con, "UPDATE barang SET id_barang = '$id_barang', nama_barang = '$nama_barang', stok = '$stok' , harga = '$harga' WHERE id_barang = '$id_barang'");

	header('location:inventory.php');
}else
{
	header('location:inventory.php');
}
?>