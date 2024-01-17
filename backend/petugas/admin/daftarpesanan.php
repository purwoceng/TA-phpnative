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

            <!-- sidebar menu -->
            <?php include('../komponen1/menupetugas.php');?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include('../komponen1/header.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <a href="inputpesanan.php" class="btn btn-success btn-sm"> daftar lagi </a> 
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                        $result = mysql_query("SELECT * FROM pesanbarang ORDER BY idpsnbrg ASC");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Pesan Barang</th>
                          <th>Jenis Pesanan</th>
                          <th>Tanggal Pesan</th>
                          <th>Tanggal Jadi</th>
                          <th>Metode Pengambilan</th>
                          <th>Status Pembayaran</th>
                          <th>Status Pesan</th>
                          <th>Kode Pelanggan</th>
                          <th>Kode Petugas</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         $no = 1;
                        while($user_data = mysql_fetch_array($result)){
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $user_data['idpsnbrg']?></td>
                          <td><?php echo $user_data['jnspsnbrg']?></td>
                          <td><?php echo $user_data['tglpsn']?></td>
                          <td><?php echo $user_data['tgljadi']?></td>
                          <td><?php echo $user_data['metpengambilan']?></td>
                          <td><?php echo $user_data['statuspembayaran']?></td>
                          <td><?php echo $user_data['statuspesan']?></td>
                          <td><?php echo $user_data['idpelanggan']?></td>
                          <td><?php echo $user_data['idpetugas']?></td>
                          <td>
                            <div class="btn-group">
                           
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li> <a href="editpesanan.php?id=<?php echo $user_data['idpsnbrg']?>" class="btn btn-success btn-sm"> Edit </a> 
                              </li>
                              <li><a href="hapus.php?&hapuspesan=<?php echo $user_data['idpsnbrg']?>" class="btn btn-danger btn-sm"> Hapus </a>
                                  </li>
                            </ul>
                          </div>
                </div>
                


                    </td>
                    </tr>
                      <?php $no++; }?>
                </tbody>
              
                    </table>
                  </div>
                </div>
              </div>
          </div>
         </div>

    <!-- jQuery -->
    <?php include ('../komponen1/js.php');?>

  </body>
</html>