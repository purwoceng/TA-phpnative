<?php
include ('../../koneksi.php');
//inputbarangmasuk
	if(isset($_POST["inputbrgmas"])){
	
		echo $_POST['idbrgmas'];

	mysql_query("INSERT INTO barangmasuk VALUES('$_POST[idbrgmas]','$_POST[tglmasuk]','$_POST[idpet]')") or die (mysql_error());
	
	header("Location: inputbrgmsk.php");
}



//inputdetbrgmasuk
	if(isset($_POST["inputdetbmas"])){
		$query=mysql_query("SELECT * FROM barang where idbrg='$_POST[idbrg]'");
		$data = mysql_fetch_array($query);
		$jumlahmsk=$_POST['jumlahbrgmas'];
		$updatejumlah = $data['jumlah']+$jumlahmsk;

			
	

	mysql_query("INSERT INTO detbrgmas VALUES('$_POST[iddetbmas]','$_POST[idbrg]','$_POST[keterangan]','$_POST[idpro]','$_POST[idpinjam]','$_POST[idpengbrg]','$_POST[satuan]','$_POST[jumlahbrgmas]','$_POST[idbrgmas]')") or die (mysql_error());
	
	mysql_query("UPDATE barang set jumlah='$updatejumlah' where idbrg='$_POST[idbrg]'") or die(mysql_error());
	
	header("Location: inputbrgmsk.php");
}

?>