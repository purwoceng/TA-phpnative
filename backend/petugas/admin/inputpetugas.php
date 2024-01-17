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
                <h3>Input Petugas</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $query = mysql_query("Select max(idpet) as maxID FROM petugas");
              $data = mysql_fetch_array($query);
              $idMax = $data['maxID'];
              $noUrut = (int) substr($idMax,-3);
              $noUrut++;
              $newID = "PET".sprintf("%03s",$noUrut);
              $tglsekarang = date("Y-m-d");
              ?>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="x_content">
                    <form action="actionptgs.php" method="post">
                      <div class="form-group">
                        <label class="control-label">ID Petugas</label>
                        <input type="text" name="idpet" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly required autofocus> 
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nama Petugas</label>
                        <input type="text" name="namapet" placeholder="" value="" class="form-control" required >
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Jenis Kelamin</label>
                        <div class="col-lg-15">
                          <select name="jk" class="form-control">
                            <option value="">-pilih-</option>
                            <option>L</option>L</option>
                            <option>P</option>P</option>
                            
                          </select>                     
                        </div>
                      <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <input type="text" name="alamat" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Telepon</label>
                        <input type="text" name="telp" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                        <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                       <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Level</label>
                        <div class="col-lg-15">
                          <select name="level" class="form-control">
                            <option value="">-pilih-</option>
                            <option> Administrator</option>Administrator</option>
                            <option>Bag.Operasional </option>Bag.Operasional</option>
                            <option>Bag.Inventaris</option>Bag.Inventaris</option>
                            <option>Direktur</option>Direktur</option>
                            
                          </select>                     
                        </div>
                      
                      <div class="form-group">
                        <label class="control-label">Username</label>
                        <input type="text" name="username" placeholder="Masukkan Username" value="" class="form-control" required autofocus>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" name="password" placeholder="" value="" class="form-control" required autofocus>
                      </div>

                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="inputpetugas">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button name="reset" type="reset" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg
                        fa-times-circle"><a href="index.php"></i>Batal</button></a>
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