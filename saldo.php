<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cofee - Saldo</title>
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
include "connect.php";
$j_debit=0;
$j_kredit=0;
$total=0;
    ?>
 
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">ACCOUNT OPENING BALANCE</li>
      </ol>

<?php
include "ClassCM.php";
$cm = new Customer;
?>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>&nbspSaldo</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table users-table table-condensed table-hover" >
              <thead>
              <tr>
                <th  class="visible-lg">No Account&nbsp&nbsp</th>
                <th  class="visible-lg">Account</th>
                <th class="visible-lg">Type</th>
                <th class="visible-lg">Debit</th>
                <th class="visible-lg">Kredit</th>
                <th class="visible-lg">Option</th>
              </tr>
              </thead>
              <tbody>
													<tr>
                                                        <td class="visible-lg">1 - 0000</td>
                                                        <td class="visible-lg">Assets</td>
                                                        <td class="visible-lg">Assets</td>
                                                        <td></td>
														<td></td>
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
                                                            <td class="visible-lg">Assets</td>
                                                             <td class="visible-lg"><?php echo "-"?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                                
                                                                 
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Assets</td>
                                                             <td class="visible-lg"><?php echo "Rp "; echo $row['debit'];?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                               <a href="openingbalance.php?aksi=edit_debit&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit</i></a>  
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
													
												<!--END-->	
                                                <tr>
                                                    <td class="visible-lg">2 - 0000</td>
                                                    <td class="visible-lg">Liabilty</td>
                                                    <td class="visible-lg">Liabilty</td>
                                                    <td>
                                                        
                                                    </td>
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
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>2 - <?php echo $row['no_akun']; ?></a></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Liabilities</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                                   
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Liabilities</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo  "Rp "; echo $row['kredit'];?></td>
                                                            <td>
                                                                <a href="openingbalance.php?aksi=edit_kredit&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit</i></a>  
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
													
													<!--END-->
													
                                                <tr>
                                                    <td class="visible-lg">3 - 0000</td>
                                                    <td class="visible-lg">Equity</td>
                                                    <td class="visible-lg">Equity</td>
                                                    <td>
                                                    </td>
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
                                                            <td class="visible-lg">Equity</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                                   
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Equity</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo "Rp "; echo $row['kredit'];?></td>
                                                            <td>
                                                               <a href="openingbalance.php?aksi=edit_kredit&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit</i></a>    
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    
                                                    ?>
													
													<tr>
                                                    <td class="visible-lg">4 - 0000</td>
                                                    <td class="visible-lg">Income</td>
                                                    <td class="visible-lg">Income</td>
                                                    <td>
                                                        
                                                    </td>
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
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>4 - <?php echo $row['no_akun']; ?></a></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Income</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                                   
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Income</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo  "Rp "; echo $row['kredit'];?></td>
                                                            <td>
                                                                <a href="openingbalance.php?aksi=edit_kredit&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit</i></a>  
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
													
													<tr>
                                                    <td class="visible-lg">5 - 0000</td>
                                                    <td class="visible-lg">Cost of Sales</td>
                                                    <td class="visible-lg">Cost of Sales</td>
                                                    <td>
                                                        
                                                    </td>
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
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>5 - <?php echo $row['no_akun']; ?></a></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg">Cost of Sales</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                                   
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Cost of Sales</td>
                                                            <td class="visible-lg"><?php echo "-";?></td>
                                                             <td class="visible-lg"><?php echo  "Rp "; echo $row['kredit'];?></td>
                                                            <td>
                                                                <a href="openingbalance.php?aksi=edit_kredit&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit</i></a>  
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
													
													
												<tr>
                                                        <td class="visible-lg">6 - 0000</td>
                                                        <td class="visible-lg">Expense</td>
                                                        <td class="visible-lg">Expense</td>
                                                        <td></td>
														<td></td>
                                                    </tr>                       
                                                    
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                                while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 6){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Expense</td>
                                                             <td class="visible-lg"><?php echo "-"?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                                
                                                                 
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - <?php echo $row['no_akun']; ?></td>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg">Expense</td>
                                                             <td class="visible-lg"><?php echo "Rp "; echo $row['debit'];?></td>
                                                             <td class="visible-lg"><?php echo "-";?></td>
                                                            <td>
                                                               <a href="openingbalance.php?aksi=edit_debit&id=<?php echo $row['id_account']; ?>" class="btn btn-info">Edit</i></a>  
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
													
                                                <?php $query = mysqli_query($connect, "SELECT sum(kredit) as j_kredit FROM account where id_jenis>=2&&id_jenis<6");
                                               while ($row = mysqli_fetch_array($query)) { $j_kredit=$row['j_kredit']; }?>
                                                        
                                                <?php $query = mysqli_query($connect, "SELECT sum(debit) as j_debit FROM account where id_jenis>=1&&id_jenis<7");
                                               while ($row = mysqli_fetch_array($query)) { $j_debit=$row['j_debit']; }?>
                                                        <tr>
                                                            <td colspan="3" class="visible-lg"><h2 style="float: right">Total</h2></td>
                                                            <td class="visible-lg">Selisih : <br> Rp <?php $total=$j_debit-$j_kredit; echo $total; ?> <br>Note <?php if($total<0||$total>0){
        echo 'Not Balance';}else{
        echo 'Balance';} ?></td>
                                                        </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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