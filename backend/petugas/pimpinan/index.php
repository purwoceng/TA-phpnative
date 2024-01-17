<?php
session_start();
error_reporting(0);
  if($_SESSION['jabatan']!=='Administrator'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang Anda tuju.');window.location=('../../logout.php')</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- isikan css disini-->
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
          </div>
        </div>

        <!-- top navigation -->
        <?php include('../komponen1/header.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <!--isi konten disini-->
           <center><h1>SELAMAT DATANG</h1></center><br>
          <center><img src="../../images/coba.png " height="200px"></center><br>
          <center><h3> Jl. Wahid Hasyim No.26, Dabag, Condongcatur, Kec. Depok, Kabupaten Sleman,</h3></center>
          <center><h3> Daerah Istimewa Yogyakarta 55281</h3></center>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!--letakan js disini-->
   <?php include ('../komponen1/js.php');?>
	
  </body>
</html>
