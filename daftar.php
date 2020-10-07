<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , initial-scale=1 " >
		<style type="text/css">
			.lgss{
							}
			
			.lgss {
				width:70px;
				height:30px;
				display:inline-block;
				background:dodgerblue;

				color:#fff;
				text-decoration:none;
				padding:2px;
				margin-left:290px;
				margin-top:-10px;
			}
			.hdsss{
				margin-top:-10px;
			}
			
		</style>
	</head>
	
	<body>
		
	<div id="wrapper">
		<div id="main">
			
			<div id="head" class="heads">
						<a href="index.php" class="lgss">Logout</a>
				
					<h1 class="hdsss">Sistem Inventaris</h1>
				
			</div>
			
				<div id="content">
					<div id="frm">
					<br>
			<form action="transfer.php" method="POST" >
				<div class="input">
				<p>Nama Barang</p> <input type="text" name="nama" > <br>
				</div>
				<div class="input">
				<p>Tipe/Seri</p> <input type="text" name="tipe" > <br>
				</div>
				<br>
				<h3 id="kondisi">Kondisi Barang:</h3>
				<br>
				<div class="input2">
				<p>Bagus</p> <input type="text" name="bagus" > <br>
				</div>
				<div class="input2">
				<p>K.Bagus</p> <input type="text" name="kurang_bagus"> <br>
				</div>
				<div class="input2">
				<p>Rusak</p> <input type="text" name="rusak"  > <br>
				</div> 	
				<div class="input2">
				<p>Total Barang</p> <input type="text" name="jumlah"  > <br>
				</div>
				
				<div class="input">
				<input type="submit" name="submit" value="Kirim" class="sub" >
				</div>
			</form>
			<div class="buttons">
				<div class="a1"><a href="daftar.php">Daftar</a></div>
				<div class="a1"><a href="tabel.php">Inventaris</a></div>
			</div>
			</div>
				</div>
			
			
		</div>
		
		
	</div>
							
		
	
	
	</body>
</html>