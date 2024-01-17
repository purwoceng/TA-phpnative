  
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
                <h3>Input Pesan Online</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $query = mysql_query("Select max(idpsnbrg) as maxID FROM pesanbarang");
              $data = mysql_fetch_array($query);
              $idMax = $data['maxID'];
              $noUrut = (int) substr($idMax,-4);
              $noUrut++;
              $newID = "PSN".sprintf("%05s",$noUrut);
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
                        <label class="control-label">Kode Pesanan</label>
                        <input type="text" name="idpsnbrg" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly> 
                      </div>
                     <div class="col-lg-15">
                      <label class="control-label">Jenis Barang</label>
                          <select name="jnspsnbrg" class="form-control">
                            <option value="">-Pilih Pesanan-</option>
                            <option>Undangan Pernikahan</option>Undangan Pernikahan</option>
                            <option>Nota</option>Nota</option>
                            <option>Kalender</option>Kalender</option>
                            <option>Banner</option>Banner</option>
                          </select>                     
                        </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Pesan</label>
                        <input type="text" name="tglpsn" placeholder="" value="<?php $tanggal=date('d-m-yy');echo"$tanggal";?>" class="form-control"readonly>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Jadi</label>
                        <input type="date" name="tgljadi" placeholder="" value="" class="form-control">
                      </div>
                       <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Metode Pengambilan</label>
                        <div class="col-lg-15">
                          <select name="metpengambilan" class="form-control">
                            <option value="">-pilih-</option>
                            <option>Ambil Sendiri</option>Ambil Sendiri</option>
                            <option>pengiriman</option>pengiriman</option>
                          </select>                     
                        </div>
                       <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Status Pembayaran</label>
                        <div class="col-lg-15">
                          <select name="statuspembayaran" class="form-control">
                            <option value="">-pilih-</option>
                            <option>DP</option>DP</option>
                            <option>LUNAS</option>LUNAS</option>
                          </select>                     
                        </div> 

                      <div class="form-group">
                        <label class="control-label">Kode Pelanggan</label>
                        <input type="text" name="idpelanggan" placeholder="" value="<?php error_reporting(0); echo $_GET['id']; ?>" class="form-control" readonly>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Kode Petugas</label>
                        <input type="text" name="idpetugas" placeholder="" value="<?php echo $_SESSION['idpetugas']; ?>" class="form-control" readonly>
                      </div>
                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="pesanonline">
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