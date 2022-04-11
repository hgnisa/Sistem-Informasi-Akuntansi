<?php
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cofee - Sale</title>
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
        <li class="breadcrumb-item active">SALE LIST</li>
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
<?php if($_GET['aksi']=="input"){ ?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Insert Sale</div>
      <div class="card-body">
                <form action="sale_input_sql.php?aksi=insert" method="GET" class="form-horizontal row-border">
                     <input type="hidden" name="aksi" value="insert">
                     
                    
                     
          <div class="panel-body">
              <div class="form-group">
                <label for="exampleInputEmail1">No. Transaction </label><br>
               
                    <input type="text" name="no_transaksi" class="form-control" id="phone"/>
                
                
              </div><!-- /phone -->
              
              

              <div class="form-group">
                <label for="exampleInputEmail1">Date</label><br>
                
                    <input type="date" name="tanggal" class="form-control" id="phone"/>
               
                
              </div><!-- /phone -->

              <div class="form-group">
               <label for="exampleInputEmail1">Count</label><br>
               
                   <input type="text" name="jumlah" class="form-control" id="phext"/>
               
               </div>
               
              
              <div class="form-group">
               <label for="exampleInputEmail1">Memo</label><br>
               
                   <input type="text" name="keterangan" class="form-control" id="phext"/>
              
               
              </div>
			  <!-- /phone Ext -->
              <div class="form-group">
            <label for="exampleInputEmail1">Item</label><br>
            
                <select class="form-control m-bot15" name="nama_barang">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM barang");
                    while ($d = mysqli_fetch_array($query)) {
                        ?>
                    <option value="<?php echo $d['nama_barang'];?>"><?php echo $d['nama_barang'] ?></option>
                    <?php } ?>
                  </select>
				</div>
         <div class="form-group">
            <label for="exampleInputEmail1">Debit</label><br>
            
                <select class="form-control m-bot15" name="debit">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM account WHERE nama_account='Cash' ");
                    while ($d = mysqli_fetch_array($query)) {
                      
                        ?>
                    <option value="<?php echo $d['nama_account'];?>"><?php echo $d['nama_account']; ?></option>
                    <?php } ?>
                  </select> 
                
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Kredit</label><br>
            
                <select class="form-control m-bot15" name="kredit">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM account WHERE nama_account='Foods' ");
                    while ($d = mysqli_fetch_array($query)) {
                      
                        ?>
                    <option value="<?php echo $d['nama_account'];?>"><?php echo $d['nama_account']; ?></option>
                    <?php } ?>
					
					<?php
                    $query = mysqli_query($connect, "SELECT * FROM account WHERE nama_account='Drinks' ");
                    while ($d = mysqli_fetch_array($query)) {
                      
                        ?>
                    <option value="<?php echo $d['nama_account'];?>"><?php echo $d['nama_account']; ?></option>
                    <?php } ?>
                  </select> 
              
            </div>
           
</div> <!-- /panel body -->
<div class="panel-footer">
  <div class="row">
   <div class="col-sm-6 col-sm-offset-3">
       <button type="submit" class="btn btn-success">Submit</button>
    <a href="sale.php" button type="button" class="btn btn-danger">Cancel</button></a>
  </div>
</div>
</div> <!-- panel footer -->
 </form>
</div></div> <!-- /panel-body -->
</div><!-- Panel -->
<?php }else{?>
 <?php
 $id=$_GET['id'];
                                                $query = mysqli_query($connect, "SELECT * FROM penjualan WHERE No_Transaksi=$id");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                      
<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Edit Sale</div>
      <div class="card-body">
                <form action="sale_input_sql.php?aksi=update&id=<?php echo $row['No_Transaksi']; ?>" method="GET" class="form-horizontal row-border">
                    <input type="hidden" name="aksi" value="update">
                    <input type="hidden" name="id" value="<?php echo $row['No_Transaksi']; ?>">
                    <div class="panel-body">
              
             
              <!-- /phone -->          
              <div class="form-group">
                <label class="col-sm-3 control-label">Date</label>
                <div class="col-sm-6">
                    <input type="date" value="<?php echo $row['Tanggal']; ?>" name="tanggal" class="form-control" id="phone"/>
                </div>
                
              </div><!-- /phone -->

              <div class="form-group">
               <label class="col-sm-3 control-label">Count</label>
               <div class="col-sm-6">
                   <input type="text" value="<?php echo $row['Jumlah']; ?>" name="jumlah" class="form-control" id="phext"/>
               </div>
               </div>

              
              <div class="form-group">
               <label class="col-sm-3 control-label">Memo</label>
               <div class="col-sm-6">
                   <input type="text" value="<?php echo $row['Keterangan']; ?>" name="keterangan" class="form-control" id="phext"/>
               </div>
               
              </div><!-- /phone Ext -->
              <div class="form-group">
            <label class="col-sm-3 control-label">Item</label>
            <div class="col-sm-6">
                <input type="text" value="<?php echo $row['Nama_Barang']; ?>" name="nama_barang" class="form-control" id="phext"/>
            </div></div>
            <div class="form-group">
            <label class="col-sm-3 control-label">Debit</label>
            <div class="col-sm-6">
                <select class="form-control m-bot15" name="debit">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM account WHERE nama_account='Cash' ");
                    while ($d = mysqli_fetch_array($query)) {
                      
                        ?>
                    <option value="<?php echo $d['nama_account'];?>"><?php echo $d['nama_account']; ?></option>
                    <?php } ?>
                  </select> 
                </div>
            </div>
             <div class="form-group">
            <label class="col-sm-3 control-label">Kredit</label>
            <div class="col-sm-6">
                <select class="form-control m-bot15" name="kredit">
					<?php
                    $query = mysqli_query($connect, "SELECT * FROM account WHERE nama_account='Drinks' ");
                    while ($d = mysqli_fetch_array($query)) {
                      
                        ?>
                    <option value="<?php echo $d['nama_account'];?>"><?php echo $d['nama_account']; ?></option>
                    <?php } ?>
                  </select> 
                </div>
            </div>
        
           
</div> <!-- /panel body -->
<div class="panel-footer">
  <div class="row">
   <div class="col-sm-6 col-sm-offset-3">
       <button type="submit" class="btn btn-success">Submit</button>
    <a href="sale.php" button type="button" class="btn btn-danger">Cancel</button></a>
  </div>
</div>
</div><!-- panel footer -->
 </form>
                  <?php
                                                    }
                                                    ?>
</div></div> <!-- /panel-body -->
</div><!-- Panel -->
<?php } ?>
</div>
</div>
</div>

<!-- Load JS here for Faster site load =============================-->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/less-1.5.0.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/application.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.sortable.js"></script>
<script type="text/javascript" src="js/jquery.gritter.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/skylo.js"></script>
<script src="js/prettify.min.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/bic_calendar.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/theme-options.js"></script>

<script src="js/bootstrap-progressbar.js"></script>
<script src="js/bootstrap-progressbar-custom.js"></script>
<script src="js/bootstrap-colorpicker.min.js"></script>
<script src="js/bootstrap-colorpicker-custom.js"></script>


<!-- Page Script  =============================-->
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<script src="js/gallery-custom.js"></script>

<!-- Core Jquery File  =============================-->
<script src="js/core.js"></script>
</div>
</body>
</html>
<?php


?>