<?php
include('../../koneksi.php');



//Hapus detail pembelian
if(isset($_GET['hapuspinjam'])){
		$id=$_GET['hapuspinjam'];
		$query=mysql_query("SELECT * FROM detpinjam where iddetpinjam='$id'");
		$data = mysql_fetch_array($query);
		$idbrg=$data['idbrg'];
		$query2=mysql_query("SELECT * FROM barang where idbrg='$idbrg'");
		$data2 = mysql_fetch_array($query2);
		 
		
		$jumlahpinjam=$data['satuan'];
		$stoksekarang=$data2['stok'];
		
		
		$stok = $stoksekarang+$jumlahpinjam;
		mysql_query("UPDATE barang set stok='$stok' where idbrg='$idbrg'");
		mysql_query("Delete FROM detpinjam WHERE iddetpinjam='$id'");
		
	header("Location:inputpinjam.php");
}

//Hapus detail proyek
if(isset($_GET['hapusproyek'])){
	
		$id=$_GET['id'];
        $query = mysql_query("Select * FROM proyek where  idpro='$id'");
        $data = mysql_fetch_array($query);

		
		$jumlahpinjam=$data['satuan'];
		$stoksekarang=$data2['stok'];
		
		
		$stok = $stoksekarang+$jumlahpinjam;
		mysql_query("UPDATE barang set stok='$stok' where idbrg='$idbrg'");
		mysql_query("Delete FROM detproyek WHERE iddetpro='$id'");
		
	header("Location:inputdetproyekk.php?id=$idpro");
}
?>
