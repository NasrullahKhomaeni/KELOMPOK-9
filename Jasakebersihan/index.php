<?php
 
include 'koneksi.php';
$user = mysqli_query($koneksi,"SELECT * FROM pelanggan");
$transaksi = mysqli_query($koneksi,"SELECT * FROM transaksiku");
 
$jumlah_user = mysqli_num_rows($user);
$jumlah_transaksi = mysqli_num_rows($transaksi);
$jumlah_total = $jumlah_user + $jumlah_transaksi;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jasa Kebersihan</title>
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
						<li><a href="#"> Home</a></li>
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
								<li><a href="formpelangan.php">Pendaftaran</a></li>
								<li><a href="formtransaksi.php">Input Data</a></li>
							</ul>
					</ul>
				</nav>				
					<h2> Jasa Kebersihan Rumah</h2>
					<a href="logout.php"><h3 class="logout">Logout</h3></a>
				</div>
				<div class="form-data">

				<table width="100%" style="text-align: center; margin-top: 50px;">
					<tr>
						<td width="33%">
							<div class="box">
								<table style="color: white; height: 40px; ">
									<tr>
									<td width="150">
										<div class="box-icon" style="background: blue;">
											<span style="font-size: 40px;line-height: 65px;" class="fas fa-user"></span>
										</div>
									</td>
									<td style="width: 100px; text-align: right;">
										<h1 style="margin-top: 5px;margin-right: 10px; font-weight: 500;"><?php echo $jumlah_user; ?></h1>
									</td>
								</tr>
								</table>
								<hr>
								<h4 class="caption">Jumlah data Pelanggan</h4>
							</div>
							
						</td>
						<td>
							<div class="box">
								<table style="color: white; height: 40px; ">
									<tr>
									<td width="150">
										<div class="box-icon" style="background: blue;">
											<span style="font-size: 40px;line-height: 65px;" class="fas fa-book"></span>
										</div>
									</td>
									<td style="width: 100px; text-align: right;">
										<h1 style="margin-top: 5px;margin-right: 10px; font-weight: 500;"><?php echo $jumlah_transaksi; ?></h1>
									</td>
								</tr>
								</table>
								<hr>
								<h4 class="caption">Jumlah data Transaksi</h4>
							</div>
						</td>
						<td>
							<div class="box">
								<table style="color: white; height: 40px; ">
									<tr>
									<td width="150">
										<div class="box-icon" style="background: blue;">
											<span style="font-size: 40px;line-height: 65px;" class="fas fa-database"></span>
										</div>
									</td>
									<td style="width: 100px; text-align: right;">
										<h1 style="margin-top: 5px;margin-right: 10px; font-weight: 500;"><?php echo $jumlah_total; ?></h1>
									</td>
								</tr>
								</table>
								<hr>
								<h4 class="caption">data Jasa Kebersihan</h4>
							</div>
						</td>
					</tr>
				</table>
			</div>

			<table class="service">
				<tr>
					<td width="390px">
						<div class="service-form">
							<div class="caption-service" style="background: blue">Pendaftaran</div>
							<div class="service-box">
								<span style="font-size: 130px; color: white; margin-top: -70px;" class="fab fa-wpforms"></span>
							</div>
							
							<a href="formpelangan.php"><button class="button-service" style="background: blue">Lest go</button></a>
						</div>
					</td>
					<td width="390px">
					<div class="service-form">
							<div class="caption-service" style="background: blue">Data Pelanggan</div>
							<div class="service-box">
								<span style="font-size: 130px; color: white; margin-top: -70px;" class="fas fa-database"></span>
							</div>
							
							<a href="datapelanggan.php"><button class="button-service" style="background: blue">Lest go</button></a>
						</div>
					</td>
					<td width="390px">
					<div class="service-form">
							<div class="caption-service" style="background: blue">Input Transaksi</div>
							<div class="service-box">
								<span style="font-size: 130px; color: white; margin-top: -70px;" class="fab fa-wpforms"></span>
							</div>
							
							<a href="formtransaksi.php"><button class="button-service" style="background: blue">Lest go</button></a>
						</div>
					</td>
				</tr>
			</table>
		</div>
	<div class="footer"></div>	

</body>
</html>
