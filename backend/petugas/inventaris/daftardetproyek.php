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
             
              </div>
            </div>
             <div class="form-group">
                         <h1 class="page"></h1>
                        <a href="index.php" class=" btn btn-success"><i class=" fa fa-home "></i> Beranda</a>
                        
                      </div> 
            <?php
              include('../../koneksi.php');
              $id=$_GET['id'];
              $query = mysql_query("Select * FROM proyek where  idpro='$id'");
              $data = mysql_fetch_array($query);

              
              ?>
            
            


             <!--  inputdetproyek -->
             
              
            
       <!--    Tabel Detail Peminjaman -->
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <div class="title_left">
                  <h3>DaftarDetail Proyek</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         $result = mysql_query("SELECT * FROM detproyek inner join barang on barang.idbrg=detproyek.idbrg where idpro='$id'");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Proyek</th>
                          <th>ID Detail Proyek</th>
                          <th>Nama Barang</th>
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
                          
                          <td><?php echo $user_data['idpro']?></td>
                          <td><?php echo $user_data['iddetpro']?></td>
                          <td><?php echo $user_data['namabrg']?></td>
                          <td><?php echo $user_data['satuan']?></td>
                          <td><?php echo $user_data['jumlahbrg']?></td>
                         
                         
                    </tr>
                
                <?php $no++; }?>

                </tbody>
                    </table>
                    
                    
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