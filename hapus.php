<?php

	require_once('koneksi.php');

		$id = $_GET['id_barang'];

	if(isset($_GET['id_barang'])){
		
	

		$sql = "DELETE FROM inventaris WHERE id_barang=$id ";

		$query = mysqli_query($conn , $sql);

		if($query){
			header("location:tabel.php");
		}else{
			die('Gagal menghapus data');
		}

	}else{
		die('Akses dilarang');
	}

?>