<?php

class Akun{
	public $no_account;
	public $nama_account;
	public $jenis_account;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataAK($id)
{
	$query = mysqli_query($this->con, "Select *from account where no_account = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->no_account = $dt->no_account;
	$this->nama_account = $dt->nama_account;
	$this->jenis_account = $dt->jenis_account;
}

function TampilSemuaAK()
{
	$query = mysqli_query($this->con, "select *from account");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['id'] = $d['no_account'];
		$data[$i]['nama_account'] = $d['nama_account'];
		$data[$i]['jenis_account'] = $d['jenis_account'];
		$i++;
	}
	
	return $data;
		}
	}
?>