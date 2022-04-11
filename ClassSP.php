<?php

class Supplier{
	public $id_supplier;
	public $nama;
	public $alamat;
	public $email;
	public $no_hp;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataSP($id)
{
	$query = mysqli_query($this->con, "Select *from supplier where id_supplier = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->id_supplier = $dt->id_supplier;
	$this->nama = $dt->nama;
	$this->alamat = $dt->alamat;
    $this->email = $dt->email;
	$this->no_hp = $dt->no_hp;
}

function TampilSemuaSP()
{
	$query = mysqli_query($this->con, "select *from supplier");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['id'] = $d['id_supplier'];
		$data[$i]['nama'] = $d['nama'];
		$data[$i]['alamat'] = $d['alamat'];
		$data[$i]['email'] = $d['email'];
		$data[$i]['no_hp'] = $d['no_hp'];
		$i++;
	}
	
	return $data;
		}
	}
?>