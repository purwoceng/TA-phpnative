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
                <div class="title_left">
                  <h3>Daftar Petugas</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         $result = mysql_query("SELECT * FROM petugas ORDER BY idpet ASC");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                        
                          <th>Nama Petugas</th>
                          <th>Jenkel</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Level</th>
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
                          
                          <td><?php echo $user_data['namapet']?></td>
                          <td><?php echo $user_data['jk']?></td>
                          <td><?php echo $user_data['alamat']?></td>
                          <td><?php echo $user_data['telp']?></td>
                          <td><?php echo $user_data['email']?></td>
                          <td><?php echo $user_data['username']?></td>
                          <td><?php echo $user_data['level']?></td>
                          <td>
                         <div class="btn-group">
                     
                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li> <a href="editpetugas.php?id=<?php echo $user_data['idpet']?>" class="btn btn-success btn-sm"> Edit </a> 
                        </li>
                        <li><a href="hapus.php?&hapuspetugas=<?php echo $user_data['idpet'] ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin akan menghapus data ini ?')"> Hapus </a>
                        </li>
                      </ul>
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