<?php
include('../../koneksi.php');

//Hapus Cabang
if(isset($_GET['hapuspet'])){
		$id=$_GET['hapuspet'];
		mysql_query("Delete FROM petugas WHERE idpetugas='$id'");
		
	header("Location: daftarpetugas2.php");
}

//Hapus Barang
if(isset($_GET['hapusbarang'])){
		$id=$_GET['hapusbarang'];
		mysql_query("Delete FROM barang WHERE kdbrg='$id'");
		
	header("Location: daftarbarang.php");
}
?>

