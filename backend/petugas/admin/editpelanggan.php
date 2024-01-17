 <?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='Administrator'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang Anda tuju.');window.location=('../../logout.php')</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('../komponen1/css.php');?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           <?php include('../komponen1/menupetugas.php');?>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
         <?php include('../komponen1/header.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Input Pelanggan</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $query = mysql_query("Select * FROM pelanggan where idpel='$_GET[id]'");
              $data = mysql_fetch_array($query);
              ?>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="x_content">
                      <form action="actionptgs.php" method="post" name="editpelanggan"  class="form-horizontal" >
                      <div class="form-group">
                        <label class="control-label">Kode Pelanggan</label>
                        <input type="text" name="idpel" placeholder="" value="<?php echo $data['idpel'];?>" class="form-control" readonly> 
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nama Pelanggan</label>
                        <input type="text" name="namapel" placeholder="" value="<?php echo $data['namapel'];?>" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="" value="<?php echo $data['alamat'];?>" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" placeholder="" value="<?php echo $data['email'];?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Telepon</label>
                        <input type="text" name="telp" placeholder="" value="<?php echo $data['telp'];?>" class="form-control">
                      </div>
                      <div class="card-footer">   
                                         
                        <button type="submit" class="btn btn-primary btn-sm" name="editpelanggan">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button name="reset" type="reset" class="btn btn-default icon-btn"><a href="index.php"><i class="fa fa-fw fa-lg
                        fa-times-circle"></i>Batal</button></a>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include ('../komponen1/js.php');?>
  
  </body>
</html>