<?php
session_start();
error_reporting(0);
  if($_SESSION['level']!=='Bag.Inventaris'){
    
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
            <?php include('../komponen1/menuinventaris.php');?>
            
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
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"> 
                  <div class="x_content">
                   
                          <!-- Current avatar -->
                           <!-- <center><h1>SELAMAT DATANG</h1></center><br>
                          <center><img class="img-responsive avatar-view" src="../../images/logo1.jpg" alt="Avatar" title="Change the avatar"></center>
                        </div>
                      </div>
                      <br>
                      <br>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Jl.Kiai Mojo No.70 Yogyakarta
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Perusahaan Konstruksi Jaringan
                        </li>

                        </ul>  
                         <center><h3><b> Halaman Bag.Inventaris<b></h3></center><br>
                        <center><h2><b>Sistem Informasi Bagian Operasional dan Bagian Inventaris</b></h2></center>  
                     -->

          <!--isi konten disini-->
           <center><h1>SELAMAT DATANG</h1></center><br>
          <center><img src="../../images/logo1.jpg " height="200px"></center><br>
          <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Jl.Kiai Mojo No.70 Yogyakarta
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Perusahaan Konstruksi Jaringan
                        </li>

          <center><h3><b> Halaman Bagian Inventaris<b></h3></center><br>
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
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
   <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- easy-pie-chart -->
    <script src="../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
  


    <!--letakan js disini-->
   <?php include ('../komponen1/js.php');?>
  
  </body>
</html>
