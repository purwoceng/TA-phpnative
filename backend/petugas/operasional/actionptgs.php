<?php	
include ('../../koneksi.php');


//input proyek
if (isset($_POST["editproyekkk"])){
	echo $_POST['idpro'];
	echo $_POST['jpro'];

	$save=mysql_query("UPDATE proyek set ('$_POST[idpro]','$_POST[jpro]','$_POST[tglpro]','$_POST[tglselesai]','$_POST[idpet]','$_POST[idpel]','$_POST[status]', where idpro = '$_POST[idpro]')") or die (mysql_error());
	
	header('location:inputproyek.php');
}

//input proyek
if(isset($_POST["inputproyek"])){
		mysql_query("UPDATE proyek SET 
                        jpro = '$_POST[jpro]',
						tglpro = '$_POST[tglpro]',
						tglselesai = '$_POST[tglselesai]',
						idpet = '$_POST[idpet]',
						idpel = '$_POST[idpel]',
						status = '$_POST[status]'
						WHERE idpro = '$_POST[idpro]'")or die(mysql_error());
		header('location:inputproyek.php');

	}

//editproyek2
	//fungsi untuk mengedit data petugas	
	if(isset($_POST["editproyek"])){
		mysql_query("UPDATE proyek SET 
                       jpro = '$_POST[jpro]',
						tglpro = '$_POST[tglpro]',
						tglselesai = '$_POST[tglselesai]',
						idpet = '$_POST[idpet]',
						idpel = '$_POST[idpel]',
						status = '$_POST[status]'
						WHERE idpro = '$_POST[idpro]'")or die(mysql_error());
		header('location:inputproyek.php');

	}

//inputpinjam
	if(isset($_POST["inputpinjam"])){
	
		echo $_POST['idpinjam'];

	mysql_query("INSERT INTO peminjaman VALUES('$_POST[idpinjam]','$_POST[tglpinjam]','$_POST[tglkembali]','$_POST[idpet]')") or die (mysql_error());
	
	header("Location: inputpinjam.php");
}

//inputdetpinjam
	if(isset($_POST["inputdetpinjam"])){

	$query=mysql_query("SELECT * FROM barang where idbrg='$_POST[idbrg]'");
	$data = mysql_fetch_array($query);
	/*$satuanpinjam=$_POST['satuan']
	$stok = $data['stok']-$satuanpinjam;*/
	
	echo $_POST['iddetpinjam'];
	

	mysql_query("INSERT INTO detpinjam VALUES('$_POST[iddetpinjam]','$_POST[idbrg]','$_POST[satuan]','$_POST[jumlahbrg]','$_POST[idpinjam]')") or die (mysql_error());
	mysql_query("UPDATE barang set stok='$stok' where idbrg='$_POST[idbrg]'");
	
	header("Location: inputpinjam.php");
}


//inputdetproyek
	if(isset($_POST["inputdetproyek"])){
	
	echo $_POST['iddetpro'];
		$idpro = $_REQUEST['idpro'];
		$query=mysql_query("SELECT *FROM proyek where  idpro='$id'");
		$data = mysql_fetch_array($query);
	

		$save=mysql_query("INSERT INTO detproyek VALUES('$_POST[iddetpro]','$_POST[idbrg]','$_POST[satuan]','$_POST[jumlahbrg]','$_POST[idpro]')") or die (mysql_error());
	
	header("Location: inputdetproyekk.php?id=$idpro");
	
}
?>