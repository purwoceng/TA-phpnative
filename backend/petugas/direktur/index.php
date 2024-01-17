<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='Direktur'){
    
    echo"<script>window.alert('Anda tidak mempunyai hak akses untuk halaman ini!. Silahkan login kembali untuk masuk ke halaman yang Anda tuju.');window.location=('../../sign-in.php')</script>";
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
        <center> <div class="title_right">
               <!--  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"> -->

        <div class="right_col" role="main">
                   
                    

          <!--isi konten disini-->
           <center><h1>SELAMAT DATANG</h1></center><br>
          <center><img src="../../images/logo1.jpg " height="200px"></center><br>
          <center><h3><b> Halaman Direktur PT.Gagas Mitra  Jaya<b></h3></center><br>
          <center><h2><b>Sistem Informasi Bagian Operasional dan Bagian Inventaris</b></h2></center>

        </div>
        </div>
      </div></center>
    <!-- </div> -->
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
