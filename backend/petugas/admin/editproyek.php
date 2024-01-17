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
                <h3>Edit Proyek</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $query = mysql_query("Select * FROM proyek where idpro='$_GET[id]'");
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
                      <form action="actionptgs.php" method="post" name="editproyek"  class="form-horizontal" >
                      <div class="form-group">
                        <label class="control-label">Kode Proyek</label>
                        <input type="text" name="idpro" placeholder="" value="<?php echo $data['idpro'];?>" class="form-control" readonly> 
                      </div>
                      <div class="form-group">
                        <label class="control-label">Jenis Proyek</label>
                        <div class="col-lg-15">
                          <select name="jpro" class="form-control" value="<?php echo $data['jpro'];?>">
                            <option value="<?php echo $data['jpro'];?>"><?php echo $data['jpro'];?></option>
                            <option> PsB</option>Pasang Seluler Baru</option>
                            <option>Maintenace </option>Maintenance</option>
                            <option>Migrasi</option>Migrasi</option>
                           
                            
                          </select>                     
                        </div>
                        <div class="form-group">
                        <label class="control-label">Tanggal Pesan</label>
                        <input type="date" name="tglpesan" placeholder="" value="<?php echo $data['tglpesan'];?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Proyek</label>
                        <input type="date" name="tglpro" placeholder="" value="<?php echo $data['tglpro'];?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Selesai</label>
                        <input type="date" name="tglselesai" placeholder="" value="<?php echo $data['tglselesai'];?>" class="form-control" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label">ID Petugas</label>
                        <input type="text" name="idpet" placeholder="" value="<?php echo $data['idpet'];?>" class="form-control" readonly>
                      </div>
                       <div class="form-group">
                        <label class="control-label">ID Pelanggan</label>
                        <select name="idpel" class="form-control" value="<?php echo $data['idpel'];?>" >
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM pelanggan ORDER by idpel DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= "<?php echo $data['idpel']?>"><?php echo $data['idpel']?>-<?php echo $data['namapel']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Status</label>
                        <div class="col-lg-15">
                          <select name="status" class="form-control">
                            <option value= "<?php echo $data['status']?>"><?php echo $data['status'];?></option>
                            <option class="btn btn-success btn-sm"> Proses</option>
                            <option> Diterima</option>
                           
                          </select>                     
                        </div>
                    
                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="editproyek">
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