<?php

	
	
	
	if(isset($_POST['submit'])){
		//$conn = mysqli_connect("sql106.byethost.com","b8_22531979","yon123","b8_22531979_inventaris");
			$conn = mysqli_connect("localhost","root","","inventaris");
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$login = mysqli_query($conn , "SELECT * FROM  login where username = '$user' AND password = '$pass'");
			$hasil = mysqli_num_rows($login);
			
			if($hasil > 0){
				$user = mysqli_fetch_assoc($login);
				session_start();
				$_SESSION['user'] = $user['username'];
				$_SESSION['pass'] = $user['password'];
				
				
				echo'Berhasil Login!';
				header("refresh:1;Url=daftar.php");
			}else{
						echo'Gagal Login';
								header("refresh:1;Url=index.php");
			}
			
	}
	
	
	
	?>
	<?php
/*	
	$conn = mysqli_connect("localhost","root","","inventaris");
		
		if(empty($_POST['user']) || empty($_POST['password']) ){
			
		}else{
		
		$user = $_POST['user'];
		$pass = $_POST['password'];
	
		$sql = "SELECT * FROM login WHERE username='$user' , password='$pass'";
		
		$query = mysqli_query($conn,$$sql);
		$cek = mysqli_num_rows($conn ,$query);
		
		if($cek){
			echo'Berhasil Masuk!';
			header("refresh:1;Location:index.php");
			
		}else{
			echo'Gagal Masuk!';
			header("refresh:1;Location:login.php");
			
		}
		}
	}
	
	*/	
		?>