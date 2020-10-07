<?php	

	 $conn = mysqli_connect("localhost","root","","inventaris");
		
	//$conn = mysqli_connect("sql106.byethost.com","b8_22531979","yon123","b8_22531979_inventaris");  
	 $result = mysqli_query($conn ,"SELECT * FROM inventaris ");	
			
		
		
		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tabel</title>
		<link rel="stylesheet" href="stts.css" >
		<meta charset="utf-8" />
		<meta name="view" content="width=device-width , initial-scale=1" />
	
	</head>
	
	<body>
	

	<div class="wrapper">
	
		<div class="ss">
	<h1>Inventaris Workshop </h1>
		</div>
	
	

	<div class="cover">
	<div class="design">
	
		
		<table>
			<tr>
				<th style="border-left-color:black;"> No </th>
                <th style=""> Nama Barang</th>
				<th> Tipe/Seri </th>
				<th> Bagus </th>
				<th>Kurang Bagus </th>
				<th> Rusak </th>
				<th>Jumlah </th>
				<th style="border-bottom-color:black; color:#f8f8f8; background:#f8f8f8;"></th>
			<th style="border-bottom-color:black;border-right-color:black; border-left-color:#fff; color:#f8f8f8; background:#f8f8f8;"></th>

			</tr>
		<?php $i =1 ; ?>
		<?php while($row= mysqli_fetch_assoc($result)) : ?>
			
			<tr>
				<td> <?php echo $i; ?></td>
				<td> <?php echo $row["nama"]; ?> </td>
				<td><?php echo $row["tipe"]; ?></td>
				<td><?php echo $row["bagus"]; ?></td>
				<td><?php echo $row["kurang_bagus"]; ?></td>
				<td><?php echo $row["rusak"]; ?></td>
				<td><?php echo $row["jumlah"]; ?></td>
				<div class="a1">
				

				 

					<td>
						
						<div class="a1">
						<?php echo" <a style='text-decoration:none; color:#fff;' href='edit.php?id_barang=".$row['id_barang']."' >Edit</a>
							"; ?>

						</div>

					</td>
					<td>

						<div class="a2">
						<?php
							echo"	<a style='text-decoration:none; color:#fff; ' href='hapus.php?id_barang=".$row['id_barang']."' >Delete</a>
								";
						?>			

						</div>

					</td>

				

		</div>	
			</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
		</table>
		
		<br><br>
		<hr>
		
		
		<label style="text-decoration:bold; font-size: 18px; font-family:;">i:</label>
		<label style="font-size:12px; ">Tabel ini berisi daftar peralatan yang terdaftar di workshop</label>
		
		
		<div id="sts">
		<a href="tabel.php" class="buttons" >Inventaris</a> 
		
			

			
		<a href="daftar.php" class="buttons" >Daftar</a> 
			
	</div>
	</div>
	</div>
		</div>
			
	</body>

	<?php
	/*
	header('Expires: Mon, 1 Jul 1998 01:00:00 GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate');
	header('Cache-Control: post-check=0 pre-check=0', FALSE);
	header('Pragma: no-cache');
	header("Last-Modified: " .gmdate("D, j M Y H:i:s" ) . " GMT" );
		
	//button

	 <td><span id="edit1"><a href='edit.php?id=" .$row['id_barang']. " '> Edit</a></span> </td>
				<td style="border-left-color:#f8f8f8;"> <span id="edit2"> <a href='hapus.php?id=" .$row['id_barang']. " '   >Del</a></span></td>

*/
	?>
</html>