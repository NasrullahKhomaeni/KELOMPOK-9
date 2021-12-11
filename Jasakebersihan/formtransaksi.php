<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data Transaksi</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style type="text/css">
	 input[name=stok]{
        width: 180px;
    }
</style>
<body>
	
	<div class="form">
		<div class="top-bar">
				<nav>
					<label for="btn" class="button"> Menu
						<span class="fas fa-caret-down"></span>
					</label>
					<input type="checkbox" id="btn">
					<ul class="menu">
						<li><a href="index.php"> Home</a></li>
						<li>
							<label for="btn-2" class="first">Fitur
								<span class="fas fa-caret-down"></span>
							</label>
							<input type="checkbox" id="btn-2">
							<ul>
								<li><a href="datapelanggan.php">Data Pelanggan</a></li>
								<li><a href="datatransaksi.php">Data Transaksi</a></li>
								<li><a href="alldata.php">All Data</a></li>
							</ul>
						</li>
						<li>
							<label for="btn-3" class="second">Layanan
								<span class="fas fa-caret-down"></span>
							</label>
							<input type="checkbox" id="btn-3">
							<ul>	
								<li><a href="formpendaftaran.php">Pendaftaran</a></li>
								<li><a href="#">Input Data</a></li>
							</ul>
					</ul>
				</nav>				
					<h2>Form Data Transaksi</h2>
					<a onclick="goBack()" style="cursor: pointer;"><h3 class="logout">Back</h3></a>
					<script>
					    function goBack() {
					        window.history.back();
					    }
					</script>
				</div>
		<div class="form-data">
		<div class="form2">
							<form action="simpantransaksi.php" method="post">
								<table class="tabelform" align="center">
								  <tr width="80">
								    <td width="25%">Jenis Ruangan</td>
								    <td width="1%">:</td>
								    <td><input type="text" name="jenis_ruangan" maxlength="5" placeholder="Masukkan jenis ruangan" required=""></td>
								  </tr>
								  <tr>
								    <td>Harga Ruangan</td>
								    <td>:</td>
								    <td><input type="text" name="harga_ruangan" placeholder="Masukkan harga ruangan" required></td>
								  </tr>
								  <tr>
								    <td>Jumlah Ruangan</td>
								    <td>:</td>
								    <td><input type="text" name="jumlah_ruangan" placeholder="Masukkan Jumlah ruangan" required></td>
								  </tr>
								  <tr>
								    <td>Tanggal Penyewaan</td>
								    <td>:</td>
								    <td><input type="date" name="tgl_penyewaan" placeholder="Masukkan tanggal" required></td>
								  </tr>
								   <tr>
								     <td valign="top" ></td>
								     <td valign="top"></td>
								     <td><input type="submit" name="POST" value="Simpan"></td>
								   </tr>
								 </table>
							 </form>
						 </div>	
			 </div>
	 </div>
	 <div class="footer"></div>	

</body>
</html>
