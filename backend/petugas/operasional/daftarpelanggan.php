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
            <?php include('../komponen1/menuoperasional.php');?>
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
                  <h3>Daftar Pelanggan</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         $result = mysql_query("SELECT * FROM pelanggan ORDER BY idpel ASC");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                        
                          <th>Nama Pelanggan</th>
                          <th>Alamat</th>
                          
                          <th>Email</th>
                          <th>Telepon</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         $no = 1;
                        while($user_data = mysql_fetch_array($result)){
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          
                          <td><?php echo $user_data['namapel']?></td>
                          
                          <td><?php echo $user_data['alamat']?></td>
                        
                          <td><?php echo $user_data['email']?></td>
                          <td><?php echo $user_data['telp']?></td>
                          
                         
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