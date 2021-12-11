<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Transaksi</title>
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
							<label for="btn-2" class="first">Features
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
							<label for="btn-3" class="second">Service
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
					<h2>Detail Transaksi</h2>
					<a onclick="goBack()" style="cursor: pointer;"><h3 class="logout">Back</h3></a>
					<script>
					    function goBack() {
					        window.history.back();
					    }
					</script>
				</div>
		<div class="form-data">
		<div class="form2">
			<p>Note* : Isilah seluruh kolom dan pastikan kebenarannya!</p>
			<?php
						include 'koneksi.php';
						$id = $_GET['id'];
						$query = "SELECT * FROM transaksiku WHERE id='$id'";
						$result = mysqli_query($koneksi, $query);
						while($data = mysqli_fetch_array($result)){
							?>
							<form action="ubahtransaksi.php?id=<?php echo $data['id']; ?>" method="post">
								<table class="tabelform" align="center">
								  <tr width="80">
								    <td width="25%">Jenis Ruangan</td>
								    <td width="1%">:</td>
								    <td><input type="text" name="jenis_ruangan" maxlength="5" placeholder="Masukkan Jenis Ruangan" required value="<?php echo $data['jenis_ruangan']; ?>"></td>
								  </tr>
								  <tr>
								    <td>Harga Ruangan</td>
								    <td>:</td>
								    <td><input type="text" name="Harga_ruangan" placeholder="Masukkan Harga Ruangan" required value="<?php echo $data['Harga_ruangan']; ?>"></td>
								  </tr>
								  <tr>
								    <td>Jumlah Ruangan</td>
								    <td>:</td>
								    <td><input type="text" name="jumlah_ruangan" placeholder="Masukkan Jumlah Ruangan" required value="<?php echo $data['jumlah_ruangan']; ?>"></td>
								  </tr>
								  <tr>
								    <td>Tanggal Penyewaan</td>
								    <td>:</td>
								    <td><input type="date" name="tgl_penyewaan" placeholder="Masukkan Tanggal" required value="<?php echo $data['jumlah_ruangan']; ?>"></td>
								  </tr>
								  <tr>
								    <td valign="top" ></td>
								    <td valign="top"></td>
								    <td><input type="submit" name="POST" value="Update"></td>
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
