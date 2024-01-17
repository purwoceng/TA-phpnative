 <?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='Bag.Inventaris'){
    
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
           <?php include('../komponen1/menuinventaris.php');?>
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
                <h3>Input Barang</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $query = mysql_query("Select max(idbrg) as maxID FROM barang");
              $data = mysql_fetch_array($query);
              $idMax = $data['maxID'];
              $noUrut = (int) substr($idMax,-3);
              $noUrut++;
              $newID = "BRG-".sprintf("%03s",$noUrut);
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
                      <form action="actionptgs.php" method="post" name="inputbarang"  class="form-horizontal" >
                      <div class="form-group">
                        <label class="control-label">Kode Barang</label>
                        <input type="text" name="idbrg" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly> 
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nama Barang</label>
                        <input type="text" name="namabrg" placeholder="" value="" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Satuan Barang</label>
                        <input type="text" name="satuan" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                       <div class="form-group">
                        <label class="control-label">Jumlah Barang</label>
                        <input type="number" name="jumlah" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                      <div class="form-group">
                        <label for="select" class="control-label">Jenis Barang</label>
                        <div class="col-lg-15">
                          <select name="jenis" class="form-control" required autofocus>
                            <option value="">-pilih-</option>
                            <option>Habis Pakai</option>Habis Pakai</option>
                            <option>Tidak Habis Pakai</option>Tidak Habis Pakai</option>
                            
                          </select>                     
                        </div>
                                           
                        <button type="submit" class="btn btn-primary btn-sm" name="inputbarang">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button name="reset" type="reset" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg
                        fa-times-circle"></i>Batal</button>
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