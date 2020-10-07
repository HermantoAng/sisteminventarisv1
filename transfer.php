 <?php

	
		if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$tipe = $_POST['tipe'];
		$bagus = $_POST['bagus'];
		$kbagus = $_POST['kurang_bagus'];
		$rusak = $_POST['rusak'];
		$jumlah = $_POST['jumlah'];

		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO inventaris (nama,tipe,bagus,kurang_bagus,rusak,jumlah) VALUES ('$nama','$tipe','$bagus','$kbagus','$rusak','$jumlah')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($conn,$sql)){
			echo 'Berhasil Menambahkan Data';
		}else{
			echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($conn);
	
		header("refresh:1; url=daftar.php");
	}
 ?>