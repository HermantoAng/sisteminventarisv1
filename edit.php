<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Edit</title>
       <link rel="stylesheet" type="text/css" href="editcss.css">
</head>
<body>
    <!-- WRAPPER... -->

    <div class="wrapper">

<!-- HEADER... -->

<h1 align="center"> Edit</h1>
<h2 align="center">Sistem Inventaris</h2>


<!-- PHP.. -->

<?php

//ambil data berdasarkan parameter GET id
$b = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM inventaris WHERE id_barang='$_GET[id_barang]'"));


//buat variabel dari setiap field name form produk
$nama= mysqli_real_escape_string($conn, $_POST['nama']);   
$tipe= mysqli_real_escape_string($conn, $_POST['tipe']);   
$bagus= mysqli_real_escape_string($conn, $_POST['bagus']); 
$kurang_bagus= mysqli_real_escape_string($conn, $_POST['kurang_bagus']);     
$rusak= mysqli_real_escape_string($conn, $_POST['rusak']);  
$jumlah= mysqli_real_escape_string($conn, $_POST['jumlah']);      

if(isset($_POST['submit'])){
 if(empty($nama)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Nama </p>";
    }
    elseif(empty($tipe)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukkan Tipe</p>";
    }
    elseif(empty($bagus)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan jumlah bagus</p>";
    }
    /*
	elseif(strlen($deskripsi) < 10){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Deskripsi Produk minimal 10 karakter</p>";
    }
	*/
    elseif(empty($kurang_bagus)){   //jika Stok kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan jumlah kurang bagus</p>";
    }
	elseif(empty($rusak)){   //jika Stok kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan jumlah rusak</p>";
    }
	elseif(empty($jumlah)){   //jika Stok kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan total jumlah</p>";
    }
    else{  //jika semua sudah terpenuhi maka update ke tb_produk


       // $sql = "UPDATE inventaris set nama='$nama',tipe='$tipe',bagus='$bagus',kurang_bagus='$kurang_bagus',rusak='$rusak',jumlah='$jumlah', WHERE id_barang='$_GET[id]'";
         $id = $_GET['id_barang'];
               

        $sql = "UPDATE inventaris SET nama='$nama' , tipe='$tipe' , bagus='$bagus' , kurang_bagus='$kurang_bagus' , rusak='$rusak' , jumlah='$jumlah' WHERE id_barang=$id ";

    $save=mysqli_query($conn, $sql );
    if($save){
     //jika update berhasil maka muncul pesan dan menuju ke halaman produk
     
        echo "<script>alert('Berhasil simpan data!')</script> ";
        header("refresh:1;");
        header("location:tabel.php");
      
       }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');</script>";
    }
}
}
?>


<!-- FORMS... -->

<form action="" method="post" enctype="multipart/form-data">
        
        <!-- TABLE.. -->

    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['nama'];?>"/>
        </td>
    </tr>
	<tr>
        <td>Tipe</td>
        <td>:</td>
        <td><input type="text" name="tipe" placeholder="Tipe" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['tipe'];?>"/>
        </td>
    </tr>
    
	<tr>
        <td>Bagus</td>
        <td>:</td>
        <td><input type="number" name="bagus" placeholder="Bagus" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['bagus'];?>"/>
        </td>
    </tr>
    
	<tr>
        <td>Kurang Bagus</td>
        <td>:</td>
        <td><input type="number" name="kurang_bagus" placeholder="Kurang Bagus" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['kurang_bagus'];?>"/>
        </td>
    </tr>
    
	<tr>
        <td>Rusak</td>
        <td>:</td>
        <td><input type="number" name="rusak" placeholder="Rusak" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['rusak'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>:</td>
        <td><input type="number" name="jumlah" placeholder="Jumlah" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['jumlah'];?>"/>
        </td>
    </tr>
    
	
    <tr>
        <td colspan="3"><button type="submit" name="submit" style="cursor: pointer;">Kirim</button></td>
    </tr>
</tbody>



</table>

    <!--  MENU... -->

</form>
	<hr style="width: 75%;  ">
	<div  class="button" style="text-align: center; margin-left: -58%; margin-top:1%;  ">
		<a href="tabel.php" style="cursor: pointer; text-decoration:none; color:#fff; background-color:#333; border-radius: 1px; padding:8px;">Kembali</a>
	</div>

</div>
</body>
</html>