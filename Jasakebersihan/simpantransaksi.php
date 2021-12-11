<?php
include 'koneksi.php';
$id          = $_GET['id'];
$jenis_ruangan        = $_POST['jenis_ruangan'];
$Harga_ruangan       = $_POST['Harga_ruangan'];
$jumlah_ruangan     = $_POST['jumlah_ruangan'];
$tgl_penyewaan      = $_POST['tgl_penyewaan'];


$query="INSERT INTO transaksiku SET jenis_ruangan='$jenis_ruangan',Harga_ruangan='$Harga_ruangan',jumlah_ruangan='$jumlah_ruangan',tgl_penyewaan='$tgl_penyewaan',id='$id'";
mysqli_query($koneksi, $query);

if($query){
 echo '<script language="javascript">alert("data berhasil diiiputkan");window.location="formpelangan.php";</script>';
}
else{
 echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
 echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>