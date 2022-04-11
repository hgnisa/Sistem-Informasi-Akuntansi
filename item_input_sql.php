<?php
include "connect.php";

$aksi=$_GET['aksi'];
if($aksi=="insert"){
	$id =$_GET['id_barang'];
    $nama_barang =$_GET['nama_barang'];
    $jenis =$_GET['jenis'];
    $stok = $_GET['stok'];
    $harga=$_GET['harga'];
     $query = mysqli_query($connect, "INSERT INTO `barang`(`id_barang`, `nama_barang`, `jenis`,`stok`,`harga`) VALUES ('$id', '$nama_barang','$jenis','$stok','$harga')");
     ?><script type="text/javascript">
							alert("Data Berhasil Di Tambahkan!");
							window.location = "item.php";
						</script> <?php
}else if($aksi=="delete"){
    $id=$_GET['id'];
    $query = mysqli_query($connect, "DELETE FROM `barang` WHERE id_barang=$id");
    ?><script type="text/javascript">
							alert("Data Berhasil Di Hapus!");
							window.location = "item.php";
						</script> <?php
}else{
     $id=$_GET['id_barang'];
     
$nama_barang =$_GET['nama_barang'];
$jenis =$_GET['jenis'];
    $harga =$_GET['harga'];
    $stok =$_GET['stok'];

      $query = mysqli_query($connect, "UPDATE `barang` SET `id_barang`='$id', `nama_barang`='$nama_barang',`jenis`='$jenis',`stok`='$stok',`harga`='$harga' WHERE id_barang=$id");
      ?><script type="text/javascript">
                            alert("Data Berhasil Di Update!");
                            window.location = "item.php";
                        </script> <?php
}      
?>