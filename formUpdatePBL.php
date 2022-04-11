<?php
include "header.php"
?>
<!-- tabel -->
<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
<!-- Data tabel css -->
<link rel="stylesheet" type="text/css" href="boot/css/dataTables.bootstrap.css">

<!-- JS -->
<script src="boot/js/jquery-1.11.3.min.js"></script>
<script src="boot/js/bootstrap.min.js"></script>

<!-- JS table -->
<script type="text/javascript" src="boot/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="boot/js/dataTables.bootstrap.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
		$('#tabel').DataTable({
			//paging: false
			//ordering: false
			/*"columnDefs":[
			{
				"targets": [ 2 ],
				"visible": false,
				"searchable": false
			}
			]*/
		});
	});
</script>
<?php
include "content.php"
?>
	<div class="col-md-10">
		<div class="panel panel-info">
			<div class="panel-heading">

		<div class="panel panel-info">
			<div class="panel-heading">
			<i class="glyphicon glyphicon-cog"></i>
				<b>Update Pembelian</b>
			</div>
			<div class="panel-body">
				<?php include "ClassPBL.php";
				$dt = new Pembelian;
				$dt->TampilSatuDataPBL($_GET['id'])
				?>

				<form action = "updatePBL.php" method="post">
				ID : <input class ="form-control" type="text" name = "id_pembelian" value="<?php print $dt->id_pembelian; ?>"><br>
 				Tgl : <input class ="form-control" type="date" name = "tgl_pembelian" value="<?php print $dt->tgl_pembelian; ?>"><br>
 				Jumlah :<input class ="form-control" type="number" name = "jml_pembelian" value="<?php print $dt->jml_pembelian; ?>"><br>
 				Harga : <input class ="form-control" type="number" name = "harga_pembelian" value="<?php print $dt->harga_pembelian; ?>"><br>
 				Keterangan : <input class ="form-control" type="text" name = "keterangan" value="<?php print $dt->keterangan; ?>"><br>
 				Id_Barang : <select name="id_barang" value="">
                  <?php
				  include 'koneksi.inc';
				  $a=mysql_query("SELECT id_barang FROM `barang`");
				  while($b=mysql_fetch_array($a)){
				  ?>
                  <option value="<?php echo $b['id_barang']?>"><?php echo $b['id_barang']; ?></option>
                  <?php } ?>
                  </select><br><br>
 				Id_Supplier : <select name="id_supplier" value="">
                  <?php
				  include 'koneksi.inc';
				  $a=mysql_query("SELECT id_supplier FROM `supplier`");
				  while($b=mysql_fetch_array($a)){
				  ?>
                  <option value="<?php echo $b['id_supplier']?>"><?php echo $b['id_supplier']; ?></option>
                  <?php } ?>
                  </select><br><br>
				<input class="login btn btn-success" type="submit" name="kirim" value ="Edit"><br>
				</form>
			</div>
		</div>
		
			</div>
		</div>
	</div>
</div>

<?php
include "footer.php"
?>
</div>
</body>
</html>