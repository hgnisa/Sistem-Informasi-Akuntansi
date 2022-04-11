<?php
include "koneksi.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

if (!empty($id_barang) && !empty($nama_barang) && !empty($stok) && !empty($harga))
{
	mysqli_query($con, "INSERT INTO barang(id_barang, nama_barang , stok, harga)
	VALUES('$id_barang', '$nama_barang','$stok','$harga')");
	header('location:inventory.php');
}else
{
	header('location:inventory.php');
}
?>