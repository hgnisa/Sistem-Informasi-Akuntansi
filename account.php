<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cofee - Account</title>
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
  
  
<?php
include "connect.php"
?>
  <!--END-->
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">ACCOUNT LIST</li>
      </ol>


<?php
include "ClassCM.php";
$cm = new Customer;
?>

	
	
	<a href="akun_input.php?aksi=input&header=D" class="btn btn-shadow btn-info" >
                                            Insert Account <i class="icon-plus"></i>

                                        </a>
                                        
                                       <a href="saldo.php" class="btn btn-shadow btn-info" >

                                           Account Opening Balance <i class="icon-plus"></i>

                                        </a>
                                     
	
	   <table class="table users-table table-condensed table-hover" >
                                            <thead>
                                                <tr>
                                                    <th  class="visible-lg">No. Account</th>
                                                    <th  class="visible-lg">Name Account</th>
                                                    <th class="visible-lg">Type Account</th>   
                                                    <th class="visible-lg">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                                    <tr>
                                                        <td class="visible-lg"><b>1 - 0000</b></td>
                                                        <td class="visible-lg"><b>Asset</b></td>
                                                        <td class="visible-lg"><b>Asset</b></td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                                while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php
                                                    if ($row['id_jenis'] == 1){ 
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Asset</td>
                                                            <td>
                                                                
                                                               <a href="akun_input.php?aksi=edit&header=H&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                                <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Asset</td>
                                                            <td>
                                                                <a href="akun_input.php?aksi=edit&header=D&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
                                                <tr>
                                                    <td class="visible-lg"><b>2 - 0000</b></td>
                                                    <td class="visible-lg"><b>Liability</b></td>
                                                    <td class="visible-lg"><b>Liability</b></td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 2){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>2 - <?php echo $row['no_akun']; ?></strong></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg"Liability</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=H&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Liability</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=D&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
													
                                                <tr>
                                                    <td class="visible-lg"><b>3 - 0000</b></td>
                                                    <td class="visible-lg"><b>Equity</b></td>
                                                    <td class="visible-lg"><b>Equity</b></td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 3){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>3 - <?php echo $row['no_akun']; ?></strong></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Capital</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=H&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Capital</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=D&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
                                                <tr>
                                                    <td class="visible-lg"><b>4 - 0000</b></td>
                                                    <td class="visible-lg"><b>Income</b></td>
                                                    <td class="visible-lg"><b>Income</b></td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                 <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 4){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>4 - <?php echo $row['no_akun']; ?></strong></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Penjualan</td>
                                                            <td>
                                                                <a href="akun_input.php?aksi=edit&header=H&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                                <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Income</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=D&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
                                                     <tr>
                                                    <td class="visible-lg"><b>5 - 0000</b></td>
                                                    <td class="visible-lg"><b>Cost of Sales</b></td>
                                                    <td class="visible-lg"><b>Cost of Sales</b></td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 5){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>5 - <?php echo $row['no_akun']; ?></strong></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Pembelian</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=H&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                                
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Cost Of Sales</td>
                                                            <td>
                                                                <a href="akun_input.php?aksi=edit&header=D&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
                                                    <tr>
                                                    <td class="visible-lg"><b>6 - 0000</b></td>
                                                    <td class="visible-lg"><b>Expense</b></td>
                                                    <td class="visible-lg"><b>Expense</b></td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 6){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>6 - <?php echo $row['no_akun']; ?></strong></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Expense</td>
                                                            <td>
                                                                 <a href="akun_input.php?aksi=edit&header=H&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                                
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Expense</td>
                                                            <td>
                                                                <a href="akun_input.php?aksi=edit&header=D&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit<i class="fa fa-edit"></i></a>
                                                               <a href="akun_input_sql.php?aksi=delete&id=<?php echo $row['id_account']; ?>" class="btn btn-warning">Delete<i class="fa fa-remove"></i></a>
                                                              
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>



                                            </tbody>
                                        </table>
  


	  <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Latte House 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>





