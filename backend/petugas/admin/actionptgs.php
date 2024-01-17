<?php	
include ('../../koneksi.php');

//input petugas
	if(isset($_POST["inputpetugas"])){
	
	echo $_POST['idpet'];
	echo $_POST['namapet'];
	$password = md5($_POST['password']);
	$save=mysql_query("INSERT INTO petugas VALUES('$_POST[idpet]','$_POST[namapet]','$_POST[jk]','$_POST[alamat]','$_POST[telp]','$_POST[email]','$_POST[level]','$_POST[username]','$password')") or die (mysql_error());
	
	header("Location: inputpetugas.php");
}

//fungsi untuk mengedit data petugas	
	if(isset($_POST["editpetugas"])){
		mysql_query("UPDATE petugas SET 
                        namapet ='$_POST[namapet]',
                        jk ='$_POST[jk]',
                        alamat = '$_POST[alamat]',
                        telp = '$_POST[telp]',
                        email = '$_POST[email]',
                        level = '$_POST[level]',
                        username = '$_POST[username]',
                        password = '$_POST[password]'
						WHERE idpet = '$_POST[idpet]'")or die(mysql_error());
		header('location:daftarpetugas.php');

	}

//input Pelanggan
if (isset($_POST["inputpelanggan"])){
	$idpel = $_POST['idpel'];
	$namapel = $_POST['namapel'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];

	$save=mysql_query("INSERT INTO pelanggan VALUES('$_POST[idpel]','$_POST[namapel]','$_POST[alamat]','$_POST[telp]','$_POST[email]')") or die (mysql_error());
	
	header('location:inputpelanggan.php');
}


//fungsi untuk mengedit data pelanggan	
	if(isset($_POST["editpelanggan"])){
		mysql_query("UPDATE pelanggan SET 
                        namapel = '$_POST[namapel]',
						alamat = '$_POST[alamat]',
						email = '$_POST[email]',
						telp = '$_POST[telp]'
						WHERE idpel = '$_POST[idpel]'")or die(mysql_error());
		header('location:daftarpelanggan.php');

	}

//input proyek
if (isset($_POST["inputproyek"])){
	echo $_POST['idpro'];
	echo $_POST['jpro'];

	$save=mysql_query("INSERT INTO proyek VALUES('$_POST[idpro]','$_POST[jpro]','$_POST[tglpesan]','$_POST[tglpro]','$_POST[tglselesai]','$_POST[idpet]','$_POST[idpel]','$_POST[status]')") or die (mysql_error());
	
	header('location:inputproyek.php');
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
