<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- isikan css disini-->
    <?php include('komponen/css.php');?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <!-- sidebar menu -->
            <?php include('komponen/sidbarmenu.php');?>
            
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include('komponen/header.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <!--isi konten disini-->
          <center><h1>SELAMAT DATANG</h1></center>


         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!--letakan js disini-->
    <?php include ('komponen/javascrip.php');?>
	
  </body>
</html>
