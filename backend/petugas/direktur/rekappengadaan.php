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
            <?php include('../komponen1/menupimpinan.php');?>
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
                <div class="title_left">
                  <h3>Rekapitulasi Pengadaan Barang</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         
                    
                      $result = mysql_query("SELECT DATE_FORMAT(tgl,'%Y') as tahun , count(pengadaan.tgl) as jmlpengadaan,sum(pengadaan.dana) as jumlahdana,sum(detpengadaan.jumlahbrg) as jmlbarang FROM pengadaan join detpengadaan on detpengadaan.idpengbrg=pengadaan.idpengbrg GROUP BY tahun");
                          
                              
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                        
                          <th>Tahun</th>
                          <th>Jumlah Pengadaan</th>
                          <th>Jumlah Dana</th>
                          <th>Jumlah Barang</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                         $no = 1;
                        while($data = mysql_fetch_array($result)){
                        ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          
                          <td><?php echo $data['tahun']?></td>
                          <td><?php echo $data['jmlpengadaan']?></td>
                          
                          <td><?php echo "Rp." . number_format($data['jumlahdana']); ?></td>
                          <td><?php echo $data['jmlbarang']?></td>
                         
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