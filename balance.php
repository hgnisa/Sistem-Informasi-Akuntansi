<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cofee - Balance Sheet</title>
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
  <?php include "navigation.php"; 
  ?>
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
<?php
include "connect.php";
$j_debit=0;
$j_kredit=0;
$total=0;
    ?>
<center><h2>Balance Sheet</h2></center>
                                        <table class="table users-table table-condensed table-hover" >
                                           
                                            <tbody>
                                            
                                                    <tr>
                                                        <td class="visible-lg"><b>Assets</b></td>
                                                        
                                                    </tr>
                                                <?php
                                                $query = mysqli_query($connect, "SELECT * FROM account order by no_akun, jenis_account desc");
                                                while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                    <?php 
                                                    if ($row['id_jenis'] == 1){
                                                    if ($row['jenis_account'] == "H" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                             <td class="visible-lg"><?php echo ""?></td>
                                                             <td class="visible-lg"><?php echo "";?></td>
                                                            <td>
                                                                
                                                                 
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                             <td class="visible-lg"><?php echo "Rp "; echo $row['debit'];?></td>
                                                             <td class="visible-lg"><?php echo "";?></td>
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>
                                                        
                                                <?php $query = mysqli_query($connect, "SELECT sum(debit) as j_debit FROM account where id_jenis>=1&&id_jenis<2");
                                               while ($row = mysqli_fetch_array($query)) { $j_debit=$row['j_debit']; }?>
                                                <tr>
                                                    <td class="visible-lg"><b>Total Assets</b></td>
                                                    <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <b><?php print "Rp ".$j_debit; ?></b>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr><br><br>

                                                <tr>
                                                    <td class="visible-lg"><b>Liabilty</b></td>
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
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg"><?php echo "";?></td>
                                                             <td class="visible-lg"><?php echo "";?></td>
                                                            <td>
                                                                   
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg"><?php echo  "Rp "; echo $row['kredit'];?></td>
                                                            <td class="visible-lg"><?php echo "";?></td>
                                                             
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    ?>



                                                <tr>
                                                    <td class="visible-lg"><b>Equity</b></td>
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
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $row['nama_account']; ?></strong></td>
                                                            <td class="visible-lg"><?php echo "";?></td>
                                                            <td class="visible-lg"><?php echo "";?></td>
                                                            <td>
                                                                   
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php if ($row['jenis_account'] == "D" && $row['no_akun']>=1000 && $row['no_akun']<9999) { ?>
                                                        <tr>
                                                            <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_account']; ?></td>
                                                            <td class="visible-lg"><?php echo  "Rp "; echo $row['kredit'];?></td>
                                                            <td class="visible-lg"><?php echo "";?></td>
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                        <?php
                                                    }}
                                                    
                                                    ?>
                                                    <?php $query = mysqli_query($connect, "SELECT sum(kredit) as j_kredit FROM account where id_jenis>=2&&id_jenis<4");
                                               while ($row = mysqli_fetch_array($query)) { $j_kredit=$row['j_kredit']; }?>
                                                        
                                                <tr>
                                                    <td class="visible-lg"><b>Total Liability + Equity</b></td>
                                                    <td class="visible-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <b><?php print "Rp ".$j_kredit; ?></b>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr><br><br>
                                                        


                                            </tbody>
                                        </table>
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