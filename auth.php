<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//print $user.' dan '.$pass;

if (empty($username) and !empty($password))
{
	header('location:login.php?i=username');
}
elseif (empty($password) and !empty($username))
{
	header('location:login.php?i=password');
}
elseif (!empty($username) and !empty($password))
{
	header('location: daftarAdmin.php');
	include "koneksi.php";
	$passok = md5($password);
	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$passok'";
	$data = mysqli_query($con,$sql);

	while ($u = mysqli_fetch_array($data))
	{
		$nama = $u['nama'];
		$alamat = $u['username'];
		$email = $u['email'];
	}

	$cek = mysqli_num_rows($data);
	if ($cek > 0)
	{
		session_start();
		$_SESSION['nama'] = $nama;
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		header('location:index.php');
	}
}
else
{
	header('location:login.php?i=gagal');
}

?>