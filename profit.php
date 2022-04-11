<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cofee - Profit & Loss</title>
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
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">PROFIT & LOSS</li>
      </ol>


<center><h2>Profit & Loss</h2></center>
                                    
                                        <table class="table users-table table-condensed table-hover" >
                                                <?php
                                                    $query = mysqli_query($connect, "SELECT sum(Harga) as jual FROM penjualan");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $jual=$row['jual']; 
                                                    }
                                                    $query = mysqli_query($connect, "SELECT sum(Harga) as beli FROM pembelian");
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        $beli=$row['beli']; 
                                                    }
                                                    $query = mysqli_query($connect, "SELECT sum(debit) as beban FROM account where id_jenis=6");
                                                    while ($row = mysqli_fetch_array($query)) { 
                                                        $beban=$row['beban']; 
                                                    }
                                                    $cos=$jual-$beli;
                                                    $total=$cos-$beban;
                                                        ?>

                                                    <tr>
                                                        <td class="visible-lg" colspan="2"><b>Income</b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Sales" ?><br><br></td>
                                                        <td><?php print "Rp ".$jual; ?></td>
                                                                                                                        
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg"><b>Total Income</b></td>                                                             
                                                        <td class="visible-lg"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$jual; ?></b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg" colspan="2"></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg" colspan="2"><b>Pengeluaran</b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Purchases" ?><br><br></td>
                                                        <td><?php print "Rp ".$beli; ?></td>                                                                
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg"><b>Total Pengeluaran</b></td>                                                             
                                                        <td class="visible-lg"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$beli; ?></b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg"><b>Gross Profit</b></td>
                                                        <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$cos ?><b></td>                                                                
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg" colspan="2"></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg" colspan="2"><b>Expense</b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                        <td class="visible-lg"><b>Total Expense</b></td>                                                             
                                                        <td class="visible-lg"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$beban; ?></b></td>                                                             
                                                    </tr>
                                                    <tr>
                                                     <?php 
                                                    if ($total < 0) {
                                                    ?>
                                                        <td><H3>Loss</h3></td>
                                                        <td class="visible-lg"><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$total; ?></b></td>
                                                    <?php } else { ?>
                                                        <td><h3>Profit</h3></td>
                                                        <td class="visible-lg"><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print "Rp ".$total; ?></b></td>
                                                       <?php } ?>
                                                        </b>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
         </div></div>
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