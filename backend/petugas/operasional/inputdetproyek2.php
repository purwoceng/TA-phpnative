<!DOCTYPE html>
<html lang="en">
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

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php include ('../komponen1/menuoperasional.php');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
       <?php include ('../komponen1/header.php');?>
            <!-- END HEADER DESKTOP-->

           <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       <h5>Pembagian<h5>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
            </section>
            <!-- END STATISTIC-->

            <section>
		
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!--isi konten disini-->
							<div class="col-lg-12">
							<form role="form" method="post" action="aksi.php">
					   <?php
					   include('../../koneksi.php');
					   $query = mysql_query("Select max(kdbg) as maxID FROM pembagian");
					   $data = mysql_fetch_array($query);
					   $idMax = $data['maxID'];
					   $noUrut = (int) substr($idMax,4);
					   $noUrut++;
					   $newID = "BG".sprintf("%04s",$noUrut);
					   $tglsekarang = date("Y-m-d");
					   ?>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Input Pembagian</strong> 
                                    </div>
									
									<div class="row">
									<div class="col-md-6">
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
										<br>
										<br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Kode Pembagian</label>
                                                </div>
                                                <div class="col-12 col-md-9">
												 <input class="form-control" value="<?php echo $newID;?>" type="text" name="kdbg" readonly>    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kode Cabang</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="text-input" name="kdcbg" placeholder="Masukkan Nama Pemasok" class="form-control">
													<?php	
													include('../../koneksi.php');
													$sql=mysql_query('SELECT * FROM cabang ORDER by kdcbg DESC');
													$no=1;
													while ($data=mysql_fetch_array($sql)) { 
													?>
													<option value= "<?php echo $data['kdcbg']?>"> <?php echo $data['kdcbg']?></option>
													<?php $no++; } ?>
													<select/>
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Kode Petugas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="text-input" name="kdpetugas" placeholder="Masukkan Nama Pemasok" class="form-control">
													<?php	
													include('../../koneksi.php');
													$sql=mysql_query('SELECT * FROM petugas ORDER by kdpetugas DESC');
													$no=1;
													while ($data=mysql_fetch_array($sql)) { 
													?>
													<option value= "<?php echo $data['kdpetugas']?>"> <?php echo $data['kdpetugas']?></option>
													<?php $no++; } ?>
													<select/>
                                                </div>
                                                </div>
												 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tanggal Pembagian</label>
                                                </div>
                                                <div class="col-9 col-md-9">
                                                    <input type="date" id="text-input" name="tglbg" placeholder="Masukkan Tanggal" class="form-control">
                                                </div>
												</div>
												<div class="card-footer">
												<button type="submit" class="btn btn-primary btn-sm" name="inputpembagian">
													<i class="fa fa-dot-circle-o"></i> Simpan
												</button>
												<button type="reset" class="btn btn-danger btn-sm">
													<i class="fa fa-ban"></i> Batal
												</button>
												</div>
												</form>
											</div>
											</div>
											
											<!-- form kanan-->
										 <?php
											include('../../koneksi.php');
											$query = mysql_query("Select max(kddbg) as maxID FROM dpembagian");
											$data = mysql_fetch_array($query);
											$idMax = $data['maxID'];
											$noUrut = (int) substr($idMax,3);
											$noUrut++;
											$newID2 = "DBG".sprintf("%03s",$noUrut);
											$tglsekarang = date("Y-m-d");
										?>
											<div class="col-md-6">
										<div class="card-body card-block">
                                        <form action="aksi.php" method="post" enctype="multipart/form-data" class="form-horizontal">
										<h4>Input Detail Pembagian</h4>
										<br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Kode Detail Pembagian</label>
                                                </div>
                                                <div class="col-12 col-md-9">
												 <input class="form-control" value="<?php echo $newID2;?>" type="text" name="kddbg" readonly>    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kode Pembagian</label>
                                                </div>
                                                <div class="col-12 col-md-9">
													<input class="form-control" value="<?php echo $newID;?>" type="text" name="kdbg" readonly>    
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Nama Barang</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="text-input" name="kdbrg" placeholder="Masukkan Nama Pemasok" class="form-control">
													<?php	
													include('../../koneksi.php');
													$sql=mysql_query('SELECT * FROM barang ORDER by kdbrg DESC');
													$no=1;
													while ($data=mysql_fetch_array($sql)) { 
													?>
													<option value= "<?php echo $data['kdbrg']?>"> <?php echo $data['namabrg']?></option>
													<?php $no++; } ?>
													<select/>
                                                </div>
                                                </div>
												 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Jumlah Pembagian</label>
                                                </div>
                                                <div class="col-9 col-md-9">
                                                    <input type="number" id="text-input" name="jumlahbg" placeholder="Masukkan Jumlah" class="form-control">
                                                </div>
												</div>
												<div class="card-footer">
												<button type="submit" class="btn btn-primary btn-sm" name="inputdpembagian">
													<i class="fa fa-dot-circle-o"></i> Simpan
												</button>
												<button type="reset" class="btn btn-danger btn-sm">
													<i class="fa fa-ban"></i> Batal
												</button>
												</div>
												</form>
											</div>
											</div>
											</div>	
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<?php
						include("../../koneksi.php");
						$result = mysql_query("SELECT * FROM dpembagian where kdbg='$newID'");
						?>
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Kode Bagi</th>
                                        <th>Kode Barang</th>
										<th>Jumlah Bagi</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$no = 1;
								while($user_data = mysql_fetch_array($result)){
								?>
								<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $user_data['kdbg']?></td>
								<td><?php echo $user_data['kdbrg']?></td>
								<td><?php echo $user_data['jumlahbg']?></td>
								<td>
								<div class="btn-group">
								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i>Action
								<span class= "caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="editpembelian.php?id=<?php echo $user_data['kddbg']?>"> 
									<i class=" fa fa-edit"></i>Edit</a>
									</li>
									<li><a href="hapus.php?&hapusdpembagian=<?php echo $user_data['kddbg'] ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')">
									<i class="fa fa-trash-o"></i>Hapus</a>
									</li>
								</ul>
								</div>
								</td>
								</tr>
								</tbody>
								<?php $no++; }?>	
							</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
				</td>
				</tr>
			</tbody>

            </section>


    <?php include('../komponen/footer.php');?>      
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <?php include('../komponen/js.php');?>

</body>

</html>
<!-- end document-->