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

  <body class="nav-md" >
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
                    <h3>Input Detail Barang Keluar</h3>
                  </div>
                </div>
                 <?php
              include('../../koneksi.php');
              $query = mysql_query("Select max(idbrgkel) as maxID FROM barangkeluar");
              $data = mysql_fetch_array($query);
              $idMax = $data['maxID'];
              $noUrut = (int) substr($idMax,-3);
              $noUrut++;
              $newID = "BK-".sprintf("%04s",$noUrut);
              $tglsekarang = date("Y-m-d");
              ?>
                <?php
                  include('../../koneksi.php');
                  $query = mysql_query("Select max(iddetbkel) as maxID FROM detbrgkel");
                  $data = mysql_fetch_array($query);
                  $idMax = $data['maxID'];
                  $noUrut = (int) substr($idMax,-3);
                  $noUrut++;
                  $newID2 = "DBK".sprintf("%04s",$noUrut);
                  
                  ?>
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="x_content">
                    <form action="actionptgs.php" method="post" name="f1">
                      <div class="form-group">
                        <label class="control-label">ID Detail Barang Keluar</label>
                        <input type="text" name="iddetbkel" placeholder="" value="<?php echo $newID2;?>" class="form-control" readonly > 
                      </div>
                       <div class="form-group">
                        <label class="control-label">Nama Barang</label>
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
                      <div class="row form-group">
                              <div class="col col-md-3"><label class=" form-control-label">Keterangan Barang Keluar</label></div>
                              <div class="col col-md-9">
                                <div class="form-check">
                                  <div class="checkbox">
                                    <label for="radio1" class="form-check-label ">
                                      <input type="checkbox" id="radio1" name="keterangan" value="proyek" class="form-check-input" onclick=function()> Proyek
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label for="radio2" class="form-check-label ">
                                      <input type="checkbox" id="radio2" name="keterangan" value="peminjaman"  class="form-check-input"  onclick=function()> Peminjaman
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>  
                            <script type="text/javascript">
                              
                              document.getElementById('radio1').onclick = function() {
                              var disabled = document.getElementById("pinjam").disabled;
                              if (disabled) {
                                document.getElementById("pinjam").disabled = false;
                              } else {
                                document.getElementById("pinjam").disabled = true;
                              }
                            }
                            </script>
                               <script type="text/javascript">
                              
                              document.getElementById('radio2').onclick = function() {
                              var disabled = document.getElementById("proyek").disabled;
                              if (disabled) {
                                document.getElementById("proyek").disabled = false;
                              } else {
                                document.getElementById("proyek").disabled = true;
                              }
                            }
                            </script>
                      <div class="form-group">
                        <label class="control-label">Tanggal Proyek</label>
                        <select name="idpro" class="form-control" required autofocus id="proyek">
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM proyek ORDER by idpro DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= ""> ------</option>
                          <option value= "<?php echo $data['idpro']?>"> <?php echo $data['tglpro']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal Peminjaman</label>
                        <select name="idpinjam" class="form-control" required autofocus id="pinjam">
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM peminjaman ORDER by idpinjam DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= ""> ------</option>
                          <option value= "<?php echo $data['idpinjam']?>"> <?php echo $data['tglpinjam']?></option>
                          <?php $no++; } ?>
                        </select>
                      </div>
                       
                      <div class="form-group">
                        <label class="control-label">Satuan</label>
                        <select name="satuan" class="form-control" required autofocus>
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
                        <input type="number" name="jumlahbrgkel" placeholder="" value="" class="form-control" required autofocus>
                      </div>
                        <div class="form-group">
                        <label class="control-label">ID Barang Keluar</label>
                        <input type="text" name="idbrgkel" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly>
                      </div>

                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="inputdetbkel">
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




            <div class="page-title">
              <div class="title_left">
                <h3>Input Barang Keluar</h3>
              </div>
            </div>
           
            
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
                        <label class="control-label">ID Barang Keluar</label>
                        <input type="text" name="idbrgkel" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly> 
                      </div>
                       
                      <div class="form-group">
                        <label class="control-label">Tanggal Keluar</label>
                        <input type="date" name="tglkel" placeholder="" value="<?php echo $tglsekarang;?>"  class="form-control" required autofocus readonly>
                      </div>
                       <div class="form-group">
                        <label class="control-label">ID Petugas</label>
                        <select name="idpet" class="form-control" required autofocus>
                        <?php 
                          include('../../koneksi.php');
                          $sql=mysql_query("SELECT * FROM petugas ORDER by idpet DESC");
                          $no=1;
                           while ($data=mysql_fetch_array($sql)) { 
                          ?>
                          <option value= "<?php echo $data['idpet']?>"> <?php echo $data['idpet']?>--<?php echo $data['namapet']?></option>
                          <?php $no++; } ?>idpet
                        </select>
                      </div>
                        
                      
                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="inputbrgkeluar">
                          <i class="fa fa-dot-circle-o"></i> Selesai
                        </button>
                        <button name="reset" type="reset" class="btn btn-default icon-btn"><a href="index.php"><i class="fa fa-fw fa-lg
                        fa-times-circle"></i>Batal</button></a>
                      </div>
                    </form>

                  </div>
                </div>
              </div>


             <!--  formdetailpeminjaman -->
             
<!--                 <div class="page-title">
                  <div class="title_left">
                    <h3>Input Detail Peminjaman Barang</h3>
                  </div>
                </div>
                <?php
                  include('../../koneksi.php');
                  $query = mysql_query("Select max(iddetbmas) as maxID FROM detpinjam");
                  $data = mysql_fetch_array($query);
                  $idMax = $data['maxID'];
                  $noUrut = (int) substr($idMax,-3);
                  $noUrut++;
                  $newID2 = "DPM".sprintf("%03s",$noUrut);
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
                        <label class="control-label">ID Detail Pinjam</label>
                        <input type="text" name="iddetpinjam" placeholder="" value="<?php echo $newID2;?>" class="form-control" > 
                      </div>
                       <div class="form-group">
                        <label class="control-label">Nama Barang</label>
                        <select name="idbrg" class="form-control" >
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
                        <input type="text" name="satuan" placeholder="" value="" class="form-control">
                      </div>
                        <div class="form-group">
                        <label class="control-label">ID Pinjam</label>
                        <input type="text" name="idpinjam" placeholder="" value="<?php echo $newID;?>" class="form-control" readonly>
                      </div>
                      <div class="card-footer">                      
                        <button type="submit" class="btn btn-primary btn-sm" name="inputdetpinjam">
                          <i class="fa fa-dot-circle-o"></i> Tambahkan
                        </button>
                        <button name="reset" type="reset" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg
                        fa-times-circle"><a href="index.php"></i>Batal</button></a>
                      </div>
                      </div>
                    </form>

                  </div>
                </div>
            </div> -->
          </div>
        </div>

       <!--    Tabel Detail Peminjaman -->
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <div class="title_left">
                  <h3>Daftar Input Detail Barang Keluar</h3>
                </div>
               <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <?php
                        include("../../koneksi.php");
                         $result = mysql_query("SELECT * FROM detbrgkel inner join barang on barang.idbrg=detbrgkel.idbrg where idbrgkel='$newID' ");
                      ?>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Barang Masuk</th>
                          <th>ID Det.Brg MSK</th>
                          <th>Nama Barang</th>
                          <th>Keterangan</th>
                          <th>ID Proyek</th>
                          <th>ID Pinjam</th>
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
                          
                          <td><?php echo $user_data['idbrgkel']?></td>
                          <td><?php echo $user_data['iddetbkel']?></td>
                          
                          <td><?php echo $user_data['idbrg']?><?php echo $data['namabrg']?></td>
                          <td><?php echo $user_data['keterangan']?></td>
                          <td><?php echo $user_data['idpro']?></td>
                          <td><?php echo $user_data['idpinjam']?></td>
                          <td><?php echo $user_data['satuan']?></td>
                          <td><?php echo $user_data['jumlahbrgkel']?></td>
                          
                         
                          <td>
                            
                              <a href="hapus.php?&hapuspinjam=<?php echo $user_data['iddetbkel'] ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin akan menghapus data ini ?')"> Hapus </a>
                              
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