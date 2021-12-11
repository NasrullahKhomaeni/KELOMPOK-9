<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style type="text/css">
		table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	  font-size: 14px;
	  color: white;

	}

	td{
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 4px;
	  background: #ffffff;
      color: black;
	}

	th {
	  padding: 5px;
	  border: 3px solid #363646;
	  color: white;
	  background: #363646;
	 font-size: 13px;
     box-sizing: content-box;
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
								<li><a href="#">Data Pelanggan</a></li>
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
								<li><a href="formpelangan.php">Pendaftaran Pelanggan</a></li>
								<li><a href="formtransaksi.php">Input Data</a></li>
							</ul>
					</ul>
				</nav>				
					<h2>Data Pelanggan</h2>
					<a onclick="goBack()" style="cursor: pointer;"><h3 class="logout">Back</h3></a>
					<script>
					    function goBack() {
					        window.history.back();
					    }
					</script>
				</div>
				 <div class="formdata">
				 	<button class="td"><a href="formpelangan.php">Tambah Data</a></button>
				 	
				 	<table border="1" width="100%">
				 <tr>
					 <th width="190px">Username</th>
					 <th width="140px">No_telp</th>
					 <th width="215px">Gender</th>
					 <th width="180px">Alamat</th>
					 <th width="180px">Tgl penyewaan</th>

					 <th colspan="2" align="center">Aksi</th>
				</tr>
					</table>
					<div class="scroll-user">
						<table>
							 
							 	<?php
							 include "koneksi.php";
							 $query="SELECT * FROM pelanggan";
							 $result = mysqli_query($koneksi, $query);
							 while($data = mysqli_fetch_array($result)){
							 echo "<tr>";
							 echo "<td width='190px'>".$data['uname']."</td>";
							 echo "<td width='180px'>".$data['no_telp']."</td>";
							 echo "<td width='105px'>".$data['gender']."</td>";
							 echo "<td width='90px'>".$data['alamat']."</td>";
							 echo "<td width='90px'>".$data['tgl_sewa']."</td>";
							 echo "<td width='50px'><a href='detailpelanggan.php?uname=".$data['uname']."'><button>Ubah</button></a></td>";
							 echo "<td width='50px'><a href='hapususer.php?uname=".$data['uname']."'><button>Hapus</button></a></td>";
							 echo "</tr>";
							 }
							 ?>
							
						 </table>
				  </div>
				 </div> 
			</div>
			<div class="footer"></div>
</body>
</html>