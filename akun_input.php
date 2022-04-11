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
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">ACCOUNT LIST</li>
      </ol>

<?php if($_GET['aksi']=="input"){ ?>
<!-- input masks -->
                <form action="akun_input_sql.php?aksi=insert" method="GET" class="form-horizontal row-border">
                     <input type="hidden" name="aksi" value="insert">
                     
                     <input type="hidden" name="header" value="<?php echo $_GET['header']; ?>">
                     
          <div class="panel-body">
          <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Insert Account Detail</div>
      <div class="card-body">
       <form action = "insertEMP.php" method="post">    
   

              <div class="form-group">
               <label class="col-sm-3 control-label">Type Account</label>
                <div class="col-sm-6">
                   <select class="form-control m-bot15" name="type" id="type">
                    <?php
                   echo "<option value=1>Asset</option>";
                    echo "<option value=1>Other Asset</option>";
                    echo "<option value=2>Liability</option>";
                    echo "<option value=3>Equtiy</option>";
                    echo "<option value=4>Income</option>";
                    echo "<option value=5>Cost Of Sales</option>";
                    echo "<option value=6>Expense</option>";
                    ?>
                        </select>
                </div>
              </div><!-- /phone Ext -->

              <div class="form-group">
                <label class="col-sm-3 control-label">No Akun</label>
                <div class="col-sm-6">
                    <input type="text" name="no" class="form-control" />
                </div>
                <div class="col-sm-3">
                
                </div>
              </div><!-- /phone -->

              <div class="form-group">
               <label class="col-sm-3 control-label">Nama Akun</label>
               <div class="col-sm-6">
                   <input type="text" name="nama" class="form-control" />
               </div>
               
               </div>

              
           

  <div class="row">
   <div class="col-sm-6 col-sm-offset-3">
       <button type="submit" class="btn btn-success">Submit</button>
    <a href="account.php" button type="button" class="btn btn-danger">Cancel</button></a>
  </div>
</div>
</div> <!-- panel footer -->
 </form>
<?php }else{?>
 <?php
 $id=$_GET['id'];
                                                $query = mysqli_query($connect, "SELECT * FROM account where id_account=$id");
                                               while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                      
<div class="row">
           <div class="col-md-12">
            <div class="panel panel-cascade">
            
                <form action="akun_input_sql.php?aksi=update&id=<?php echo $row['id_account']; ?>" method="GET" class="form-horizontal row-border">
                    <input type="hidden" name="aksi" value="update">
                    <input type="hidden" name="id" value="<?php echo $row['id_account']; ?>">
                    <input type="hidden" name="header" value="<?php echo $_GET['header']; ?>">
                    <div class="panel-body">
              
              <div class="form-group">
                <label class="col-sm-3 control-label">Akun Type</label>
                <div class="col-sm-6">
                   <select class="form-control m-bot15" name="type" id="type">
                    <?php
                    echo "<option value=1>Asset</option>";
                    echo "<option value=1>Other Asset</option>";
                    echo "<option value=1>Account Receivable</option>";
                    echo "<option value=2>Liability</option>";
                    echo "<option value=3>Equtiy</option>";
                    echo "<option value=4>Income</option>";
                    echo "<option value=5>Cost Of Sales</option>";
                    echo "<option value=6>Expense</option>";
                    ?>
                    
                        </select>
                </div>
                <div class="col-sm-3">
                  
                </div>
              </div><!-- /date -->

              <div class="form-group">
                <label class="col-sm-3 control-label">No Akun</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php echo $row['no_akun']; ?>" name="no" class="form-control" id="phone"/>
                </div>
                <div class="col-sm-3">
                 
                </div>
              </div><!-- /phone -->

              <div class="form-group">
               <label class="col-sm-3 control-label">Nama Akun</label>
               <div class="col-sm-6">
                   <input type="text" value="<?php echo $row['nama_account']; ?>" name="nama" class="form-control" id="phext"/>
               </div>
               <div class="col-sm-3">
                
               </div>
              </div><!-- /phone Ext -->
           
</div> <!-- /panel body -->

  <div class="row">

   <div class="col-sm-6 col-sm-offset-3">
       <button type="submit" class="btn btn-success">Submit</button>
    <a href="account.php" button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
  
 </form>
                  <?php
                                                    }
                                                    ?>
<?php } ?>



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
</div>
</div>


</body>
</html>
<?php


?>