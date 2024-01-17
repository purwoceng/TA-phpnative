<html>
  <head>
	<!-- Ini Meta, link, dan CSS-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>HOTEL</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
	  <?php include ('komponen/header.php');?>
      <!-- Ini Menu-->
       <?php include ('komponen/nav.php');?>
	  
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Edit Petugas</h3>
              <div class="card-body">
						<!-- auto ID -->
						<?php
						include ('../../koneksi.php');
						$query = mysql_query("SELECT * FROM petugas WHERE kdpet='$_GET[id]'");
						$data = mysql_fetch_array($query);
						$tgl=date("Y-m-d");
						?>
          				<!-- form -->
						<form name="input" action="actionp.php" method="post">
							<div class="form-group">
								<label class="control-label">Kode Petugas</label>
								<input type="text" name="kdpet" placeholder="" value="<?php echo $data['kdpet'];?>" class="form-control" readonly> 
							</div>
							<div class="form-group">
								<label class="control-label">Nama Petugas</label>
								<input type="text" name="namapet" placeholder="" value="<?php echo $data['namapet'];?>" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Alamat</label>
								<input type="text" name="alamat" placeholder="" value="<?php echo $data['alamat'];?>" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Jabatan</label>
								<input type="text" name="jabatan" placeholder="" value="<?php echo $data['jabatan'];?>" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Username</label>
								<input type="text" name="username" placeholder="Masukkan Username" value="<?php echo $data['username'];?>" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label">Password</label>
								<input type="password" name="paswp" placeholder="" value="<?php echo $data['paswp'];?>" class="form-control">
							</div>
							<div class="form-group">
							<label for="select" class="col-lg-2 control-label">Level</label>
							<div class="col-lg-15">
							<select name="levelp" class="form-control">
								<option value="<?php echo $data['levelp'];?>"><?php echo $data['levelp'];?></option>
								<option>Pimpinan</option>Pimpinan</option>
								<option>Administrator</option>Administrator</option>
								<option>Manajer</option>Manajer<M/option>
							</select><br>
							</div>
							<div class="card-footer">
								<button name="editpetugas" type="submit" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg
								fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;
								<button name="reset" type="reset" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg
								fa-times-circle"></i>Batal</button>
							</div>
						</form>
              </div>
            </div>
          </div>
        </div>
		<!-- Footer-->
		  <?php include('komponen/footer.php'); ?>
      </div>
    </div>
		  
    <!-- Ini Javascripts-->
	  <?php include('komponen/js.php'); ?>
    
  </body>
</html>
