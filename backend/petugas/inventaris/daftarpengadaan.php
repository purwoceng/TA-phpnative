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
            <?php include('../komponen1/menuinventaris.php');?>
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
                  <h3>Daftar Pengadaan</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         $result = mysql_query("SELECT * FROM pengadaan ORDER BY idpengbrg ASC");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                        
                          <th>ID Pengadaan</th>
                          <th>Tanggal Pengadaan</th>
                          <th>ID Petugas</th>
                          <th>Dana</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         $no = 1;
                        while($user_data = mysql_fetch_array($result)){
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          
                          <td><?php echo $user_data['idpengbrg']?></td>
                          
                          <td><?php echo $user_data['tgl']?></td>
                        
                          
                          <td><?php echo $user_data['idpet']?></td>
                          <td><?php echo $user_data['dana']?></td>
                          
                          <td>
                         
                     <a href="daftardetpeng.php?id=<?php echo $user_data['idpengbrg'] ?>"  class="btn btn-info btn-sm"><i class="fa fa-search"></i>Lihat Detail</a>
                    <a href="daftardetpeng.php?id=<?php echo $user_data['idpengbrg'] ?>"  class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="daftardetpeng.php?id=<?php echo $user_data['idpengbrg'] ?>"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
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