<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
	<?php
		$conn = mysqli_connect("localhost","root","","inventaris");
		$query = mysqli_query($conn , "SELECT * FROM inventaris");
	?>
		<div class="hdrs">
	<header>	
		<div style="">
		<h1 style="padding-top: 2px; cursor: default; color: #fff; text-align:center; padding-top: 15px; " id="font-ch1"> Teknik Komputer & Jaringan SMK YPPI tualang</h1>
			<div class="imgss">
			<div class="imgss1">
			<img src="smk.png" width="90px" height="90px" style="float: right; margin-left: 10px;">
				</div>
				<div class="imgss2">
			<img src="tkj.png" width="90px" height="90px" style="float: left; margin-right: 10px;">
			</div>
		</div>
			</div>
	</header>
</div>
	<br>
	<div class="wrapper">
	<!--
	<div class="hd"><div class="hdhead"><h1>Judul</h1></div></div>
--><!--<div class="imgs"><img src="smk.png"></div>
-->
	<div class="tbl">
		<table>
			<tr class="hds">
				<div class="hdshead">
				<h1 style="padding-top: 2px; cursor: default;">Sistem Inventaris </h1>		
				</div>		
			</tr>
			<tr id="heads">
				<th style="border-left: none;">
					<p>No</p>	
				</th>
				<th>
					<p>Nama Barang</p>
				</th>
				<th>
					<p>Tipe Barang</p>
				</th>
				<th>
					<p>Bagus</p>
					</th>
				<th>
					<p>Kurang Bagus</p>
				</th>
				<th>
					<p>Rusak</p>
				</th>
				<th>
					Jumlah Barang
				</th>
				
				<th colspan="2">Edit</th>
			</tr>

			<?php $i = 1; ?>

			<?php while($row = mysqli_fetch_assoc($query) ) : ?>
			<tr>
				<td style="border-left: none;">
					<p><?php echo $i; ?></p>	
				</td>
				<td>
					<div class="ps2"><p><?php echo $row['nama']; ?></p></div>
				</td>

				<td>
					<div class="ps2"><p><?php echo $row['tipe']; ?></p>
				</div></td>

				<td class="tds">
					<div class="ps"><p><?php echo $row['bagus']; ?></p>
				</div></td>

				<td class="tds">
					<div class="ps"><p><?php echo $row['kurang_bagus']; ?></p>
				</div></td>
				<td class="tds">
					<div class="ps"><p><?php echo $row['rusak']; ?></p>
				</div ></td>

				<td class="tds"><div class="ps" id="jumlahs">
					<p><?php echo $row['jumlah']; ?></p>
				</div></td>
				<td class="tds"><div class="ps" id="jumlahs">
					
						<span class="buttons">
						<?php
				echo"
					<a style='background-color: green; text-decoration:none; color:#fff; padding:4px;' href='edit.php?id_barang=".$row['id_barang']." '>Edit</a>
					
					";?></span>
					<span class="buttons">
						<?php
						echo"
						<a style='background-color: red; text-decoration:none; color:#fff;padding:4px;' href='hapus.php?id_barang=".$row['id_barang']."' >Hapus</a>
						";
						?>
					</span>

				</div></td>
			</tr>
				<?php $i++; ?>
		<?php endwhile; ?>
		</table>
		<br><br>
		
	</div>
	<hr style="width: 70%; color: #fff;">
				<div class="btns" style="height:auto;">
					<br>
					<a href="daftar.php" style="padding:6px; margin-top:5px;" class="ss">Daftar</a>
					
					<a href="tabel.php" style="padding:6px; margin-top:15px;" class="ss">Inventaris</a>
					
				
			
				</div>	
				<br><br>
	
		<div class="footer">
		<footer>
					
				</footer>

			</div>		
</div>
	
</body>
</html>