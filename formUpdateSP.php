<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cofee - Supplier</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-white" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Latte House</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">List</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="customer.php">Customer</a>
            </li>
            <li>
              <a href="supplier.php">Supplier</a>
            </li>
			<li>
              <a href="employee.php">Employee</a>
            </li>
			<li>
              <a href="inventory.php">Inventory</a>
            </li>
			<li>
              <a href="account.php">Account</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Transaction</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="purchase.php">Purchases</a>
            </li>
            <li>
              <a href="sale.php">Sales</a>
            </li>
           
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Report</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="journal.php">Journal</a>
            </li>
            <li>
              <a href="profit.php">Profit & Loss</a>
            </li>
            <li>
              <a href="balance.php">Balance Sheet</a>
            </li>
          </ul>
        </li>
        
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
  
  <!--END-->
  
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">SUPPLIER LIST</li>
      </ol>


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


	<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Edit Supplier</div>
      <div class="card-body">
			<?php include "ClassSP.php";
				$dt = new Supplier;
				$dt->TampilSatuDataSP($_GET['id'])
			?>
				<form action = "updateSP.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">ID Supplier</label><br>
					<input class ="form-control" type="text" name = "id_supplier" value="<?php print $dt->id_supplier; ?>"><br>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Supplier Name</label><br>
					<input class ="form-control" type="text" name = "nama" value="<?php print $dt->nama; ?>"><br>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Supplier Address</label><br>
					<input class ="form-control" type="text" name = "alamat" value="<?php print $dt->alamat; ?>"><br>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Supplier Email</label><br>
					<input class ="form-control" type="email" name = "email" value="<?php print $dt->email; ?>"><br>
				</div>
 				<div class="form-group">
					<label for="exampleInputEmail1">Telephone</label><br>
					<input class ="form-control" type="text" name = "no_hp" value="<?php print $dt->no_hp; ?>"><br>
				</div>
 				
				<input class="btn btn-primary" type="submit" name="kirim" value ="Edit">
    			<a href="supplier.php" button type="button" class="btn btn-warning">Cancel</button></a>
				</form>
			</div>

		</div>
		
			</div> <br><br>
			<footer class="sticky-footer">
				<div class="container">
				<div class="text-center">
          <small>Copyright © Latte House 2017</small>
        </div>
      </div>
    </footer>
		</div>
	</div>

</div>
</div>
</body>
</html>