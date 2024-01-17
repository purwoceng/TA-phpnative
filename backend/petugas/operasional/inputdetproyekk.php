 <?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='Bag.Operasional'){
    
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
           <?php include('../komponen1/menuoperasional.php');?>
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
                <h3>Input Proyek</h3>
              </div>
            </div>
            <?php
              include('../../koneksi.php');
              $id=$_GET['id'];
              $query = mysql_query("Select * FROM proyek where  idpro='$id'");
              $data = mysql_fetch_array($query);

              
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
                        <label class="control-label">ID Proyek</label>
                        <input type="text" name="idpro" placeholder="" value="<?php echo $_GET[id];?>" class="form-control" readonly> 
                      </div>
                    </form>

                  </div>
                </div>
              </div>


             <!--  inputdetproyek -->
             
                <div class="page-title">
                  <div class="title_left">
                    <h3>Input Detail Proyek </h3>
                  </div>
                </div>
                  <?php
                  include('../../koneksi.php');
                  $query = mysql_query("Select max(iddetpro) as maxID FROM detproyek");
                  $data = mysql_fetch_array($query);
                  $idMax = $data['maxID'];
                  $noUrut = (int) substr($idMax,-3);
                  $noUrut++;
                  $newID = "DPRO".sprintf("%03s",$noUrut);
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
                        <label class="control-label">ID Detail Proyek</label>
                        <input type="text" name="iddetpro" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly> 
                      </div>
                       <div class="form-group">
                        <label class="control-label">ID Barang</label>
                        <select name="idbrg" class="form-control" required autofocus >
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM barang ORDER by idbrg DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= "<?php echo $data['idbrg']?>"> <?php echo $data['namabrg']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div>
                       
                      <div class="form-group">
                        <label class="control-label">Satuan</label>
                        <select name="satuan" class="form-control" >
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM barang ORDER by idbrg DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= "<?php echo $data['satuan']?>"> <?php echo $data['satuan']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div>
                       
                      
                      <div class="form-group">
                        <label class="control-label">Jumlah Barang</label>
                        <input type="number" name="jumlahbrg" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                       <div class="form-group">
                        <label class="control-label">ID Proyek</label>
                                    <?php
                                      include('../../koneksi.php');
                                      $query = mysql_query("Select * FROM proyek where idpro='$_GET[id]'");
                                      $data = mysql_fetch_array($query);
                                      
                                      ?>
                        <input type="text" name="idpro" placeholder="" readonly value= "<?php echo $data['idpro']?>" class="form-control">
                      </div>
                        <!-- <div class="form-group">
                        <label class="control-label">ID Proyek</label>
                        <select name="idpro" class="form-control" >
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM proyek ORDER by idpro DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= "<?php echo $data['idpro']?>"> <?php echo $data['idpro']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div> -->
                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="inputdetproyek">
                          <i class="fa fa-dot-circle-o"></i> Tambahkan
                        </button>
                        <button name="reset" type="reset" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg
                        fa-times-circle"><a href="index.php"></i>Batal</button></a>
                      </div>
                      </div>

                    </form>

                  </div>
                </div>
            </div>
          </div>
        </div>

       <!--    Tabel Detail Peminjaman -->
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <div class="title_left">
                  <h3>Daftar Input Detail Proyek</h3>
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
                          
                          <td><?php echo $user_data['idpro']?></td>
                          <td><?php echo $user_data['iddetpro']?></td>
                          <td><?php echo $user_data['namabrg']?></td>
                          <td><?php echo $user_data['satuan']?></td>
                          <td><?php echo $user_data['jumlahbrg']?></td>
                         
                          <td>
                            
                              <a href="hapus.php?&hapusproyek=<?php echo $user_data['iddetpro'] ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin akan menghapus data ini ?')"> Hapus </a>
                              
                            </ul>
                          </div>

                          </td>
                    </tr>
                
                <?php $no++; }?>

                </tbody>
                    </table>
                    <div class="form-group">
                         <h1 class="page"></h1>
                        <a href="index.php" class=" btn btn-success"><i class=" fa fa-home "></i> Selesai</a>
                        
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