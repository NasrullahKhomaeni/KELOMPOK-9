<?php
 include "koneksi.php";
$id   = $_GET['id'];
 // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
$query = "DELETE FROM transaksiku WHERE id='$id'";
mysqli_query($koneksi, $query);
if($query){
 echo '<script language="javascript">alert("data berhasil dihapus");window.location="datatransaksi.php"</script>';

}

?>