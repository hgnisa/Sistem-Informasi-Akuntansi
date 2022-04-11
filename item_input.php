
<?php
include "connect.php";
?>

  <div class="col-md-10">
    <div class="panel panel-info">
      <div class="panel-heading">

    <div class="panel panel-info">
      <div class="panel-heading">
      <i class="glyphicon glyphicon-cog"></i>
        <b>Tambah Barang</b>
      </div>
      <div class="panel-body">
<?php if($_GET['aksi']=="input"){ ?>

                <form action="item_input_sql.php?aksi=insert" method="GET" class="form-horizontal row-border">
                     <input type="hidden" name="aksi" value="insert">
                     
                    
                     
          <div class="panel-body">
              
              

			  <div class="form-group">
                <label class="col-sm-3 control-label">Id_Barang</label>
                <div class="col-sm-6">
                    <input type="text" name="id_barang" class="form-control" id="phone"/>
                </div>
                
              </div><!-- /phone -->
              <div class="form-group">
                <label class="col-sm-3 control-label">Nama Barang</label>
                <div class="col-sm-6">
                    <input type="text" name="nama_barang" class="form-control" id="phone"/>
                </div>
                
              </div><!-- /phone -->
<div class="form-group">
               <label class="col-sm-3 control-label">Jenis</label>
               <div class="col-sm-6">
                   <input type="text" name="jenis" class="form-control" id="phext"/>
               </div> 
               
              </div><!-- /phone Ext -->
              <div class="form-group">
               <label class="col-sm-3 control-label">Stok</label>
               <div class="col-sm-6">
                   <input type="number" name="stok" class="form-control" id="phext"/>
               </div> 
               
              </div><!-- /phone Ext -->
              <div class="form-group">
               <label class="col-sm-3 control-label">Harga</label>
               <div class="col-sm-6">
                   <input type="text" name="harga" class="form-control" id="phext"/>
               </div>
               
              </div><!-- /phone Ext -->
           
</div> <!-- /panel body -->
<div class="panel-footer">
  <div class="row">
   <div class="col-sm-6 col-sm-offset-3">
       <button type="submit" class="btn btn-success">Submit</button>
    <a href="inventory.php" button type="button" class="btn btn-danger">Cancel</button></a>
  </div>
</div>
</div> <!-- panel footer -->
 </form>
</div></div> <!-- /panel-body -->
</div><!-- Panel -->
<?php }else{?>
 <?php
 $id=$_GET['id'];
 $query = mysqli_query($connect, "SELECT * FROM barang where id_barang=$id");
 while ($row = mysqli_fetch_array($query)) {
 ?>
                <form action="item_input_sql.php?aksi=update&id=<?php echo $row['id_barang']; ?>" method="GET" class="form-horizontal row-border">
                    <input type="hidden" name="aksi" value="update">
                    <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
                    <div class="panel-body">
              
             
			               <!-- <div class="form-group">
                <label class="col-sm-3 control-label">Id_Barang</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php echo $row['id_barang']; ?>" name="id_barang" class="form-control" id="phone"/>
                </div>
                
              </div> -->
			  <!-- /phone -->
              <div class="form-group">
                <label class="col-sm-3 control-label">Nama Barang</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php echo $row['nama_barang']; ?>" name="nama_barang" class="form-control" id="phone"/>
                </div>
                
              </div><!-- /phone -->
              <div class="form-group">
               <label class="col-sm-3 control-label">Jenis</label>
               <div class="col-sm-6">
                   <input type="text" value="<?php echo $row['jenis']; ?>" name="jenis" class="form-control" id="phext"/>
               </div>
               
              </div><!-- /phone Ext -->

              <div class="form-group">
               <label class="col-sm-3 control-label">Stok</label>
               <div class="col-sm-6">
                   <input type="number" value="<?php echo $row['stok']; ?>" name="stok" class="form-control" id="phext"/>
               </div>
               
              </div><!-- /phone Ext -->

              <div class="form-group">
               <label class="col-sm-3 control-label">Harga</label>
               <div class="col-sm-6">
                   <input type="text" value="<?php echo $row['harga']; ?>" name="harga" class="form-control" id="phext"/>
               </div>
               
              </div><!-- /phone Ext -->
           
</div> <!-- /panel body -->
<div class="panel-footer">
  <div class="row">
   <div class="col-sm-6 col-sm-offset-3">
       <button type="submit" class="btn btn-success">Submit</button>
    <a href="inventory.php" button type="button" class="btn btn-danger">Cancel</button></a>
  </div>
</div>
</div> <!-- panel footer -->
 </form>
                  <?php
                                                    }
                                                    ?>
</div></div> <!-- /panel-body -->
</div><!-- Panel -->
<?php } ?>
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

</div>
</body>
</html>
<?php


?>