<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if (!empty($nama) && !empty($email) && !empty($username) && !empty($password))
{
	mysqli_query($con, "INSERT INTO admin(nama,email,username,password)
	VALUES('$nama','$email','$username','$password')");
	header('location:login.php');
}else
{
	header('location:daftarAdmin.php');
}
?>