 <?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='Bag.Operasional'){
    
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
           <?php include('../komponen1/menuoperasional.php');?>
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
                <h3>Input Proyek</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $id=$_GET['id'];
              $query = mysql_query("SELECT * FROM proyek join pelanggan on pelanggan.idpel=proyek.idpel where idpro='$id'");
              $data1 = mysql_fetch_array($query);
              
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
                        <label class="control-label">ID Proyek</label>
                        <input type="text" name="idpro" placeholder="" value="<?php echo $data1['idpro'];?>" class="form-control" readonly> 
                      </div>
                      <div class="form-group">
                        <label class="control-label">Jenis  Proyek</label>
                        <input type="text" name="jpro" placeholder="" value="<?php echo $data1['jpro'];?>" class="form-control" readonly> 
                      </div>
                       <!-- <div class="form-group">
                        <label class="control-label">Jenis Proyek</label>
                        <select name="jpro" class="form-control" value="<?php echo $data['jpro']?>">
                        <?php 
                          include('../../koneksi.php');
                          //$sql=mysql_query("SELECT * FROM proyek ORDER by idpro DESC");
                          //$no=1;
                           //while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option > <?php echo $data['jpro']?></option>
                         
                        </select>
                      </div> -->
                      <div class="form-group">
                        <label class="control-label">Tanggal Pesan</label>
                        <input  name="tglpesan" placeholder="" value="<?php echo $data1['tglpesan'];?>" readonly class="form-control" required autofocus>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Proyek</label>
                        <input type="date" name="tglpro" placeholder="" value="<?php echo $data['tglpro'];?>"  class="form-control" required autofocus>
                      </div>
                        <div class="form-group">
                        <label class="control-label">Tanggal Selesai</label>
                        <input type="date" name="tglselesai" placeholder="" value="<?php echo $data['tglselesai'];?>" class="form-control" required auto fokus>
                      </div>
                       <div class="form-group">
                        <label class="control-label">ID Petugas</label>
                        <select name="idpet" class="form-control" >
                        <?php 
                          include('../../koneksi.php');
                         // $sql=mysql_query("SELECT * FROM petugas ORDER by idpet DESC");
                        
                          $sql = mysql_query("SELECT * FROM petugas");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= "<?php echo $data['idpet']?>"> <?php echo $data['namapet']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div>
                       <div class="form-group">
                        <label class="control-label">ID Pelanggan</label>
                        <input type="text" name="idpel" placeholder="" value="<?php echo $data1['idpel'];?>" class="form-control" readonly> 
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-15">
                          <select name="status"  class="form-control">
                           <option value="<?php echo $data1['status']?>"><?php echo $data1['status']?></option>
                            <option> Proses</option>
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

        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include ('../komponen1/js.php');?>
  
  </body>
</html>