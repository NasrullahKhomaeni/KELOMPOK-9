<?php
include 'koneksi.php';

$id          = $_GET['id'];
$jenis_transaksi        = $_POST['jenis_transaksi'];
$Harga_transaksi       = $_POST['Harga_transaksi'];
$jumlah_transaksi     = $_POST['jumlah_transaksi'];
$tgl_penyewaan          = $_POST['tgl_penyewaan'];



$query="UPDATE transaksiku SET jenis_transaksi='$jenis_transaksi',Harga_transaksi='$Harga_transaksi',jumlah_transaksi='$jumlah_transaksi',tgl_penyewaan='$tgl_penyewaan' WHERE id='$id'";
mysqli_query($koneksi, $query);

if($query){

    echo '<script language="javascript">alert("data berhasil diubah...");window.location="datapelanggan.php";</script>';
}
   else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>

