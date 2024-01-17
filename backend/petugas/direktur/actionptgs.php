<?php	
include ('../../koneksi.php');

//input petugas
	if(isset($_POST["inputpetugas"])){
	
	echo $_POST['idpetugas'];
	echo $_POST['nmpetugas'];
	$password = md5($_POST['password']);
	$save=mysql_query("INSERT INTO petugas VALUES('$_POST[idpetugas]','$_POST[nmpetugas]','$_POST[alamat]','$_POST[tlp]','$_POST[username]','$password','$_POST[jabatan]')") or die (mysql_error());
	
	header("Location: inputpetugas.php");
}

//fungsi untuk mengedit data petugas	
	if(isset($_POST["editpetugas"])){
		if ($_POST['password']=="") {
			mysql_query("UPDATE petugas SET 
                        nmpetugas ='$_POST[nmpetugas]',
                        jabatan ='$_POST[jabatan]',
                        alamat = '$_POST[alamat]',
                        tlp = '$_POST[tlp]',
                        username = '$_POST[username]'
						WHERE idpetugas = '$_POST[idpetugas]'")or die(mysql_error());
		header('location:daftarpetugas2.php');
		}else{
			$password = md5($_POST['password']);
			mysql_query("UPDATE petugas SET 
                        nmpetugas ='$_POST[nmpetugas]',
                        jabatan ='$_POST[jabatan]',
                        alamat = '$_POST[alamat]',
                        tlp = '$_POST[tlp]',
                        username = '$_POST[username]',
						password = '$password'
						WHERE idpetugas = '$_POST[idpetugas]'")or die(mysql_error());
		header('location:daftarpetugas2.php');
		}
		

	}
//input PESANAN
if (isset($_POST["inputpelanggan"])){
	$kdkon = $_POST['idpelanggan'];
	$nmkon = $_POST['namapelanggan'];
	$altkon = $_POST['alamat'];
	$nohp = $_POST['tlp'];
	$email = $_POST['email'];

	$save=mysql_query("INSERT INTO pelanggan VALUES('$_POST[idpelanggan]','$_POST[namapelanggan]','$_POST[alamat]','$_POST[tlp]','$_POST[email]')") or die (mysql_error());
	
	header('location:inputpelanggan.php');
}


//fungsi untuk mengedit data PESANAN	
	if(isset($_POST["editpelanggan"])){
		mysql_query("UPDATE pelanggan SET 
                        namapelanggan ='$_POST[nmpetugas]',
                        namapelanggan ='$_POST[jabatan]',
                        alamat = '$_POST[alamat]',
                        tlp = '$_POST[tlp]',
                        email = '$_POST[username]'
						WHERE idpelanggan = '$_POST[idpelanggan]'")or die(mysql_error());
		header('location:inputpelanggan.php');

	}

?>
