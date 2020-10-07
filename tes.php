<?php
	
	require_once('koneksi.php');

	$query = "SELECT * FROM inventaris";

	$sql = mysqli_query($conn , $query);

	$row = mysqli_fetch_assoc($sql);
		
	var_dump($row);

	
?>