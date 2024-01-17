<?php	
include ('../../koneksi.php');

//input petugas
	if(isset($_POST["inputbarang"])){
	
	echo $_POST['namabrg'];
	
	$save=mysql_query("INSERT INTO barang VALUES('$_POST[idbrg]','$_POST[namabrg]','$_POST[satuan]','$_POST[jumlah]','$_POST[jenis]')") or die (mysql_error());
	
	header("Location: inputbarang.php");
}




//inputbarangkeluar
	if(isset($_POST["inputbrgkeluar"])){
	
		echo $_POST['idbrgkel'];

	mysql_query("INSERT INTO barangkeluar VALUES('$_POST[idbrgkel]','$_POST[tglkel]','$_POST[idpet]')") or die (mysql_error());
	
	header("Location: inputbrgklr.php");
}

//inputdetbrgkeluar
	if(isset($_POST["inputdetbkel"])){
		$query=mysql_query("SELECT * FROM barang where idbrg='$_POST[idbrg]'");
		$data = mysql_fetch_array($query);
		$jumlahkel=$_POST['jumlahbrgkel'];
		$updatejumlah = $data['jumlah']-$jumlahkel;

	
	mysql_query("INSERT INTO detbrgkel VALUES('$_POST[iddetbkel]','$_POST[idbrg]','$_POST[keterangan]','$_POST[idpro]','$_POST[idpinjam]','$_POST[satuan]','$_POST[jumlahbrgkel]','$_POST[idbrgkel]')") or die (mysql_error());
	mysql_query("UPDATE barang set jumlah='$updatejumlah' where idbrg='$_POST[idbrg]'");
	
	header("Location: inputbrgklr.php");
}

//inputpengadaan
	if(isset($_POST["inputpengadaan"])){
	
		echo $_POST['idpengbrg'];

	mysql_query("INSERT INTO pengadaan VALUES('$_POST[idpengbrg]','$_POST[tgl]','$_POST[idpet]','$_POST[dana]')") or die (mysql_error());
	
	header("Location: inputpengadaan.php");
}

//inputpengadaan
	if(isset($_POST["inputdetpengadaan"])){


	$query1=mysql_query("SELECT * FROM barang where idbrg='$_POST[idbrg]'");
		$data1 = mysql_fetch_array($query1);
		$jumlahpeng=$_POST['jumlahbrg'];
		$updatejumlah1 = $data1['jumlah']+$jumlahpeng;

	

	mysql_query("INSERT INTO detpengadaan VALUES('$_POST[iddetpengbrg]','$_POST[idbrg]','$_POST[satuan]','$_POST[jumlahbrg]','$_POST[idpengbrg]')") or die (mysql_error());
	mysql_query("UPDATE barang set jumlah='$updatejumlah1' where idbrg='$_POST[idbrg]'");
	
	header("Location: inputpengadaan.php");
}


?>
