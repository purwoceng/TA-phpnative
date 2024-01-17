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
                  <h3>Rekapitulasi Proyek</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         
                    
                      $result = mysql_query("SELECT sum(proyek.jpro='PSB') as jmlpsb,sum(proyek.jpro='Migrasi') as jmlmigrasi, sum(proyek.jpro='Maintenance') as jmlmain,DATE_FORMAT(tglpro,'%Y') as tahun , count(proyek.jpro) as jmlproyek FROM proyek  GROUP BY tahun");
                          
                              
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                        
                          <th>Tahun</th>
                          <th>Jumlah PSB</th>
                          <th>Jumlah Migrasi</th>
                          <th>Jumlah Maintenance</th>
                          <th>Jumlah Total</th>
                         
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
                          <td><?php echo $data['jmlpsb']?></td>
                          <td><?php echo $data['jmlmigrasi']?></td>
                          <td><?php echo $data['jmlmain']?></td>
                          <td><?php echo $data['jmlproyek']?></td>
                          
                         
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