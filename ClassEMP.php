<?php

class Employee{
	public $id_employee;
	public $nama_employee;
	public $noTelp_employee;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataEMP($id)
{
	$query = mysqli_query($this->con, "Select *from employee where id_employee = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->id_employee = $dt->id_employee;
	$this->nama_employee = $dt->nama_employee;
	$this->noTelp_employee = $dt->noTelp_employee;
}

function TampilSemuaEMP()
{
	$query = mysqli_query($this->con, "select *from employee");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['id'] = $d['id_employee'];
		$data[$i]['nama_employee'] = $d['nama_employee'];
		$data[$i]['noTelp_employee'] = $d['noTelp_employee'];
		$i++;
	}
	
	return $data;
		}
	}
?>