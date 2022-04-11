<?php

class Pembelian{
	public $No_Transaksi;
	public $Tanggal;
	public $jumlah;
	public $Harga;
	public $Keterangan;
	public $Nama_Barang;
	public $Nama_Supplier;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataPBL($id)
{
	$query = mysqli_query($this->con, "Select *from pembelian where No_Transaksi = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->No_Transaksi = $dt->No_Transaksi;
	$this->Tanggal = $dt->Tanggal;
	$this->jumlah = $dt->jumlah;
	$this->Harga = $dt->Harga;
	$this->Keterangan = $dt->Keterangan;
	$this->Nama_Barang = $dt->Nama_Barang;
	$this->Nama_Supplier = $dt->Nama_Supplier;
}

function TampilSemuaPBL()
{
	$query = mysqli_query($this->con, "select *from pembelian");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['No_Transaksi'] = $d['No_Transaksi'];
		$data[$i]['Tanggal'] = $d['Tanggal'];
		$data[$i]['jumlah'] = $d['jumlah'];
		$data[$i]['Harga'] = $d['Harga'];
		$data[$i]['Keterangan'] = $d['Keterangan'];
		$data[$i]['Nama_Barang'] = $d['Nama_Barang'];
		$data[$i]['Nama_Supplier'] = $d['Nama_Supplier'];
		$i++;
	}
	
	return $data;
		}
	}
?>