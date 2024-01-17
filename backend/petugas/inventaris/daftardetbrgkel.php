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
                  <h3>Daftar Detail Barang Keluar</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                        $id=$_GET['id'];
                         $result = mysql_query("SELECT * FROM detbrgkel inner join barang USING(idbrg)  left  join proyek USING(idpro) left join Peminjaman USING(idpinjam) where idbrgkel='$id'");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Det.Brg Kel</th>
                        
                          <th>Nama Barang</th>
                          <th>Keterangan</th>
                          <th>Tanggal Proyek</th>
                          <th>Tanggal Peminjaman</th>
                          <th>Satuan</th>
                          <th>Jumlah</th>
                          
                        

                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         $no = 1;
                        while($user_data = mysql_fetch_array($result)){
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $user_data['iddetbkel']?></td>
                          <td><?php echo $user_data['namabrg']?></td>
                          <td><?php echo $user_data['keterangan']?></td>
                          <td><?php echo $user_data['tglpro']?></td>
                          <td><?php echo $user_data['tglpinjam']?></td>
                          <td><?php echo $user_data['satuan']?></td>
                          <td><?php echo $user_data['jumlahbrgkel']?></td>
                          
                          
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