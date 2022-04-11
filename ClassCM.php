<?php

class Customer{
	public $id_customer;
	public $nama_customer;
	public $noTelp_customer;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataCM($id)
{
	$query = mysqli_query($this->con, "Select *from customer where id_customer = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->id_customer = $dt->id_customer;
	$this->nama_customer = $dt->nama_customer;
	$this->noTelp_customer = $dt->noTelp_customer;
}

function TampilSemuaCM()
{
	$query = mysqli_query($this->con, "select *from customer");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['id'] = $d['id_customer'];
		$data[$i]['nama_customer'] = $d['nama_customer'];
		$data[$i]['noTelp_customer'] = $d['noTelp_customer'];
		$i++;
	}
	
	return $data;
		}
	}
?>