<?php

class Barang{
	public $id_barang;
	public $nama_barang;
	public $stok;
	public $harga;
	public $jenis;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataBRG($id)
{
	$query = mysqli_query($this->con, "Select *from barang where id_barang = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->id_barang = $dt->id_barang;
	$this->nama_barang = $dt->nama_barang;
	$this->stok = $dt->stok;
	$this->harga = $dt->harga;
	$this->jenis = $dt->jenis;
}

function TampilSemuaBRG()
{
	$query = mysqli_query($this->con, "select *from barang");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['id_barang'] = $d['id_barang'];
		$data[$i]['nama_barang'] = $d['nama_barang'];
		$data[$i]['stok'] = $d['stok'];
		$data[$i]['harga'] = $d['harga'];
		$data[$i]['jenis'] = $d['jenis'];
		$i++;
	}
	
	return $data;
		}
	}
?>