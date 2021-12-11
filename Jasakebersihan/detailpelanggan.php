<!DOCTYPE html>
<html>
<head>
	<title>Form Data Pelanggan</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
								<li><a href="formpelangan.php">Pendaftaran</a></li>
								<li><a href="formtransaksi.php">Input Data</a></li>
							</ul>
						</li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>				
					<h2>Detail Pelanggan</h2>
					<a onclick="goBack()" style="cursor: pointer;"><h3 class="logout">Back</h3></a>
					<script>
					    function goBack() {
					        window.history.back();
					    }
					</script>
				</div>
				 <div class="form-data">
				 	<div class="form2">
						<?php
						include 'koneksi.php';
						$uname = $_GET['uname'];
						$query = "SELECT * FROM pelanggan WHERE uname='$uname'";
						$result = mysqli_query($koneksi, $query);
						while($data = mysqli_fetch_array($result)) {
							?>
						<form action="ubahpelanggan.php" method="post">
							<table class="tabelform" align="center">
							  <tr width="80">
							    <td>Username</td>
							    <td>:</td>
							    <td><input type="text" name="uname" readonly="readonly" placeholder="Masukkan username" value="<?php echo $data['uname']; ?>" ></td>
							  </tr>
							  <tr>
							    <td width="25%">No_telp</td>
							    <td width="1%">:</td>
							    <td><input type="text" name="no_telp" placeholder="Masukkan nomor anda" value="<?php echo $data['no_telp']; ?>" required=""></td>
							  </tr>
							  <tr>
							    <td valign="top">Gender</td>
							    <td valign="top">:</td>
							   <td>
								 <?php
								 if($data['gender'] == "Laki-laki"){
								 echo "<input type='radio' name='jk' value='Laki-laki' checked='checked'> Laki-laki";
								 echo "<input type='radio' name='jk' value='Perempuan'> Perempuan"; }
								 else{
								 echo "<input type='radio' name='jk' value='Laki-laki'> Laki-laki";
								 echo "<input type='radio' name='jk' value='Perempuan' checked='checked'> Perempuan";
								 }
								 ?>
							  </td>
							  </tr>
							  <tr>
							    <td>Alamat</td>
							    <td>:</td>
							    <td>
							    	<input type="text" name="alamat" placeholder="Alamat tempat tinggal" value="<?php echo $data['alamat']; ?>" required>
							    </td>
							  </tr>
							  <tr>
							    <td>Tgl penyewaan</td>
							    <td>:</td>
							    <td>
							    	<input type="date" name="alamat" placeholder="Masukkan tanggal Penyewaan" value="<?php echo $data['tgl_sewa']; ?>" required>
							    </td>
							  </tr>
							  <tr>
							    <td valign="top" ></td>
							    <td valign="top"></td>
							    <td> <input type="submit" name="POST" value="Update">  </td>
							  </tr>

							</table>
							
						</form>
						<?php 
						}
						?>	
				</div>	
			</div>
	</div>
	<div class="footer"></div>	
</body>
</html>
