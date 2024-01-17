<?php
include('../../koneksi.php');

//Hapus petugas
if(isset($_GET['hapuspetugas'])){
		$id=$_GET['hapuspetugas'];
		mysql_query("Delete FROM petugas WHERE idpet='$id'");
		
	header("Location: daftarpetugas.php");
}


//Hapus pelanggan
if(isset($_GET['hapuspelanggan'])){
		$id=$_GET['hapuspelanggan'];
		mysql_query("Delete FROM pelanggan WHERE idpel='$id'");
		
	header("Location: daftarpelanggan.php");
}
//Hapus pesanan
if(isset($_GET['hapuspesan'])){
		$id=$_GET['hapuspesan'];
		mysql_query("Delete FROM pesanbarang WHERE idpsnbrg='$id'");
		
	header("Location: daftarpesanan.php");
}


?>

