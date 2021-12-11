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
								<li><a href="#">Pendaftaran</a></li>
								<li><a href="formtransaksi.php">Input Data</a></li>
							</ul>
					</ul>
				</nav>				
					<h2>Form Pendaftaran</h2>
					<a onclick="goBack()" style="cursor: pointer;"><h3 class="logout">Back</h3></a>
					<script>
					    function goBack() {
					        window.history.back();
					    }
					</script>
				</div>
			<div class="form-data">	
				<div class="form2">
						<p>Silahkan isi data dibawah ini:</p>
							<form action="simpanpelanggan.php" method="post">
								<table class="tabelform" align="center">
								  <tr width="80">
								    <td width="25%">Username</td>
								    <td width="1%">:</td>
								    <td><input type="text" name="uname" placeholder="Masukkan nama anda" required=""></td>
								  </tr>
								  <tr>
								    <td>No_telp</td>
								    <td>:</td>
								    <td><input type="text" name="no_telp" placeholder="Masukkan no_telp" required></td>
								  </tr>
								  <tr>
								    <td valign="top">Gender</td>
								    <td valign="top">:</td>
								    <td>
								    	<input type="radio" name="jk" value="Laki-laki" required>Laki-laki <br>	
								    	<input type="radio" name="jk" value="Perempuan" required>Perempuan
								    </td>
								  </tr>
								  <tr>
								    <td>Alamat</td>
								    <td>:</td>
								    <td><input type="text" name="alamat" placeholder="Masukkan Alamat Tujuan" required></td>
								  </tr>
								  <tr>
								    <td>Tgl penyewaan</td>
								    <td>:</td>
								    <td><input type="date" name="no_telp" placeholder="Masukkan Tanggal penyewaan" required></td>
								  </tr>
								  <tr>
        							<td><input type="submit" name="submit" value="Simpan" /><td>
    							  </tr>
								</table>
							</form>
				</div>
		</div>
</div>
<div class="footer"></div>		

</body>
</html>