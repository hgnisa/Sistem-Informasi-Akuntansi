<?php

class Penjualan{
	public $No_Transaksi;
	public $Tanggal;
	public $Jumlah;
	public $Harga;
	public $Keterangan;
	public $Nama_Barang;
	public $Nama_Customer;


		function __construct(){
		

		$con = mysqli_connect("localhost","root","","paradise");
		$this->con = $con;
		}



function TampilSatuDataPJL($id)
{
	$query = mysqli_query($this->con, "Select *from penjualan where id_penjualan = '$id'");
	$dt = mysqli_fetch_object($query);

	$this->No_Transaksi = $dt->No_Transaksi;
	$this->Tanggal = $dt->Tanggal;
	$this->Jumlah = $dt->Jumlah;
	$this->Harga = $dt->Harga;
	$this->Keterangan = $dt->Keterangan;
	$this->Nama_Barang = $dt->Nama_Barang;
	$this->Nama_Customer = $dt->Nama_Customer;
}

function TampilSemuaPJL()
{
	$query = mysqli_query($this->con, "select *from penjualan");
	$i = 0;
	while($d = mysqli_fetch_array($query))
	{
		$data[$i]['No_Transaksi'] = $d['No_Transaksi'];
		$data[$i]['Tanggal'] = $d['Tanggal'];
		$data[$i]['Jumlah'] = $d['Jumlah'];
		$data[$i]['Harga'] = $d['Harga'];
		$data[$i]['Keterangan'] = $d['Keterangan'];
		$data[$i]['Nama_Barang'] = $d['Nama_Barang'];
		$data[$i]['Nama_Customer'] = $d['Nama_Customer'];
		$i++;
	}
	
	return $data;
		}
	}
?>