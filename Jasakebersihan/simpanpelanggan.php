<?php
include 'koneksi.php';
$uname          = $_POST['uname'];
$no_telp        = $_POST['no_telp'];
$gender       = $_POST['gender'];
$alamat     = $_POST['alamat'];
$tgl_sewa   = $_POST['tgl_sewa'];


$query="INSERT INTO pelanggan SET uname='$uname',no_telp='$no_telp',gender='$gender',alamat='$alamat',alamat='$alamat',tgl_sewa='$tgl_sewa' ";
mysqli_query($koneksi, $query);

if($query){
 echo '<script language="javascript">alert("data berhasil diiiputkan");window.location="formpelangan.php";</script>';
}
else{
 echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
 echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>