<?php
include "connect.php";

$aksi=$_GET['aksi'];
if($aksi=="insert"){
    $no_transaksi =$_GET['no_transaksi'];
    $tanggal=$_GET['tanggal'];
    $jumlah=$_GET['jumlah'];
    $keterangan =$_GET['keterangan'];
    $nama_barang=$_GET['nama_barang'];
	$nama_supplier=$_GET['nama_supplier'];
	$nama_employee=$_GET['nama_employee'];
    $debit=$_GET['debit'];
    $kredit=$_GET['kredit'];
     
     $query2 = mysqli_query($connect, "SELECT * FROM barang WHERE `barang`.`nama_barang` = '$nama_barang'");
    $m = mysqli_fetch_object($query2);
        if ($jumlah > 0){
            $jumlahStok = $m->stok + $jumlah;
            
            if($jumlahStok >= 0){
                $harga = ($m->harga * $jumlah);
                            
                $query = mysqli_query($connect, "UPDATE `paradise`.`barang` SET `stok`= '$jumlahStok' WHERE `barang`.`nama_barang`='$nama_barang'");
                $query = mysqli_query($connect, "INSERT INTO `pembelian` (`No_Transaksi`, `Tanggal`, `Jumlah`, `Harga`, `Keterangan`, `Nama_Barang`, `Nama_Supplier`, `Nama_Employee`, `debit`,`kredit`) VALUES ($no_transaksi, '$tanggal',$jumlah, $harga, '$keterangan', '$nama_barang', '$nama_supplier', '$nama_employee','$debit','$kredit')");
				

                $query1 = mysqli_query($connect, "SELECT * FROM account");
      $n = mysqli_fetch_object($query1);
      if($debit = 'Cash'){
      $query3 = mysqli_query($connect, "SELECT debit from account where `account`.`nama_account` = '$debit'");
      $s = mysqli_fetch_object($query3);
      $j_debit =  $s->debit - $harga; 
      $query7 = mysqli_query($connect, "UPDATE `paradise`.`account` SET `debit`='$j_debit' where `account`.`nama_account`='$debit'");
}
	  
	  $query9 = mysqli_query($connect, "SELECT * FROM account");
	  $n = mysqli_fetch_object($query9);
      if($debit = 'Inventory'){
      $query11 = mysqli_query($connect, "SELECT debit from account where `account`.`nama_account` = '$debit'");
      $k = mysqli_fetch_object($query11);
      $j_debit = $k->debit + $harga; 
      $query12 = mysqli_query($connect, "UPDATE `paradise`.`account` SET `debit`='$j_debit' where `account`.`nama_account`='$debit'");
    }
    

    
     ?>
     <script type="text/javascript">
                            //alert("Data Berhasil Di Tambahkan!");
                            window.location = "purchase.php";
                        </script>
                        <?php 
                    } 
            else {
                ?><script type="text/javascript">
                            //alert("Nomor Transaksi Sudah Terpakai, Silahkan gunakan nomor transakis lain");
                            window.location = "purchase_input.php";
                            </script>           
            <?php } 
        } ?> <?php
        
}else if($aksi=="delete"){
    
    

    $id=$_GET['id'];
    $nama_barang=$_GET['nama'];
    $query = mysqli_query($connect, "DELETE FROM `pembelian` WHERE No_Transaksi=$id");
    ?><script type="text/javascript">
                            
                            alert("Data Berhasil Di Hapus!");
                            window.location = "purchase.php";
                        </script> <?php
}else{
    $id=$_GET['id'];
    $tanggal=$_GET['tanggal'];
    $jumlah=$_GET['jumlah'];
    //$harga =$_GET['harga'];
    $keterangan =$_GET['keterangan'];
    $nama_barang=$_GET['nama_barang'];
	$nama_supplier=$_GET['nama_supplier'];
	$nama_employee=$_GET['nama_employee'];
    $debit=$_GET['debit'];
    $kredit=$_GET['kredit'];
$query5 = mysqli_query($connect, "SELECT * FROM pembelian WHERE `pembelian`.`No_Transaksi` = '$id'");
    $a = mysqli_fetch_object($query5);
    $query2 = mysqli_query($connect, "SELECT * FROM barang WHERE `barang`.`nama_barang` = '$nama_barang'");
    $m = mysqli_fetch_object($query2);
    $jumlahBrg = ($m->stok) + ($a->Jumlah);
    $jumlahStok = (($jumlahBrg)+($jumlah));

    $harga = $m->harga * $jumlah;
$query = mysqli_query($connect, "UPDATE `pembelian` SET `No_Transaksi`=$id,`Tanggal`='$tanggal',`jumlah`='$jumlah',`Harga`=$harga,`Keterangan`='$keterangan',`Nama_Barang`='$nama_barang',`Nama_Supplier`='$nama_supplier',`Nama_Employee`='$nama_employee',`kredit`='$kredit',`debit`='$debit' WHERE No_Transaksi=$id");
$query1 = mysqli_query($connect, "UPDATE `paradise`.`barang` SET `stok`= '$jumlahStok' WHERE `barang`.`nama_barang`='$nama_barang'");
?><script type="text/javascript">
                            alert("Data Berhasil Di Update!");
                            window.location = "purchase.php";
                        </script> <?php

}      
?>
