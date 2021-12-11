<?php
include 'koneksi.php';

$uname          = $_POST['uname'];
$no_telp           = $_POST['no_telp'];
$gender         = $_POST['gender'];	
$alamat         = $_POST['alamat'];
$tgl_sewa       = $_POST['tgl_sewa'];


$query="UPDATE pelanggan SET no_telp='$no_telp',gender='$gender',alamat='$alamat',tgl_sewa='$tgl_sewa' WHERE uname='$uname'";
mysqli_query($koneksi, $query);

if($query){
 echo '<script language="javascript">alert("data berhasil diubah...");window.location="datapelanggan.php";</script>';
}
else{
 echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
 echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>