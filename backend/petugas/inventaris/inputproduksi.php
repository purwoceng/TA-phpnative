 
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
           <?php include('../komponen1/menuproduksi.php');?>
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
              $query = mysql_query("Select max(idpelanggan) as maxID FROM pelanggan");
              $data = mysql_fetch_array($query);
              $idMax = $data['maxID'];
              $noUrut = (int) substr($idMax,-4);
              $noUrut++;
              $newID = "PR".sprintf("%05s",$noUrut);
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
                      <form method="post" name="inputpelanggan"  class="form-horizontal" >
                      <div class="form-group">
                        <label class="control-label">Kode Pelanggan</label>
                        <input type="text" name="idpelanggan" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly> 
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nama Pelanggan</label>
                        <input type="text" name="namapelanggan" placeholder="" value="" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Telepon</label>
                        <input type="text" name="tlp" placeholder="" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" placeholder="" value="" class="form-control">
                      </div>
                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="inputpelanggan">
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