
<?php	
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Petugas</title>
	<!-- Memanggil Favicon -->
	<link rel="icon" type="image/ico" href="images/logo1.jpg">
	<!-- Bootstrap -->
	<link href="inc_login/css/bootstrap.min.css" rel="stylesheet">
	<link href="inc_login/css/index_background.css" rel="stylesheet">
	<style>
		body {
			
			background-image: url("images/kabel.jpg");
			
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>

</head>
<body>
	<?php	
	if(isset($_POST['login'])){
		include("koneksi.php");
	
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		//echo 
		$query1 = mysql_query("SELECT * FROM petugas WHERE username ='$username' AND password ='$password'");
		if(mysql_num_rows($query1) == 0){
		echo "<script>alert('Username atau Password Salah!');window.location='sign-in.php'</script>";
		}else{			
			$row = mysql_fetch_assoc($query1);
			if($row['level'] == 'Administrator' ){
				$_SESSION['username']=$username;
				$_SESSION['idpet']=$row['idpet'];
				$_SESSION['namapet']=$row['namapet'];
				$_SESSION['jk']=$row['jk'];
				$_SESSION['alamat']=$row['alamat'];
				$_SESSION['telp']=$row['telp'];
				$_SESSION['email']=$row['email'];
				$_SESSION['password']=$row['password'];
				$_SESSION['level']='Administrator';
				header("Location:petugas/admin/index.php");
			}else if($row['level'] == 'Bag.Operasional'){
				$_SESSION['username']=$username;
				$_SESSION['idpet']=$row['idpet'];
				$_SESSION['namapet']=$row['namapet'];
				$_SESSION['jk']=$row['jk'];
				$_SESSION['alamat']=$row['alamat'];
				$_SESSION['telp']=$row['telp'];
				$_SESSION['password']=$row['password'];
				$_SESSION['level']='Bag.Operasional';
				header("Location:petugas/operasional/index.php");
			}else if($row['level'] == 'Bag.Inventaris'){
				$_SESSION['username']=$username;
				$_SESSION['idpet']=$row['idpet'];
				$_SESSION['namapet']=$row['namapet'];
				$_SESSION['jk']=$row['jk'];
				$_SESSION['alamat']=$row['alamat'];
				$_SESSION['telp']=$row['telp'];
				$_SESSION['password']=$row['password'];
				$_SESSION['level']='Bag.Inventaris';
				header("Location:petugas/inventaris/index.php");
			}else if($row['level'] == 'Direktur'){
				$_SESSION['username']=$username;
				$_SESSION['idpet']=$row['idpet'];
				$_SESSION['namapet']=$row['namapet'];
				$_SESSION['jk']=$row['jk'];
				$_SESSION['alamat']=$row['alamat'];
				$_SESSION['telp']=$row['telp'];
				$_SESSION['password']=$row['password'];
				$_SESSION['level']='Direktur';
				header("Location:petugas/direktur/index.php");
			}else {

				echo "<script>alert('Username atau Password Salah!');window.location='sign-in.php'</script>";
			}
		}
	  
	}

?>
	
	<div class="container">
		<div class="row">
			<div class="login">
				<img src="images/logo1.jpg" width="250" border="0">
				<hr>
				<form role="form" method="post" >
					<div class="form-group">
						<input type="text" class="form-control" placeholder="username" name="username" required oninvalid="this.setCustomValidity('Username harus diisi!')
						"oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="password" name="password" required oninvalid="this.setCustomValidity('Password harus diisi!')
						"oninput="setCustomValidity('')">
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-sm" value="Masuk" />
						<input type="reset" name="" class="btn btn-danger btn-sm" value="Batal" />
					</div>
				</form>
				<hr>
				<?php
				date_default_timezone_set('Asia/Jakarta');
				$tahun=date("Y");
				?>
				SIM PT.Gagas Mitra Jaya &copy; <?php echo $tahun?> 
			</div>
			
		</div>
		<script>
		function myFunction() {
		  alert("I am an alert box!");
		}
		</script>
	</div>

	<script src="inc_login/js/bootstrap.min.js"></script>
</body>
</html>