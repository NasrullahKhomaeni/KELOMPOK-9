<?php
 include "koneksi.php";
$uname   = $_GET['uname'];
$query = "DELETE FROM pelanggan WHERE uname='$uname'";
mysqli_query($koneksi, $query);
if($query){
 echo '<script language="javascript">alert("data berhasil dihapus");window.location="datapelanggan.php"</script>';

}

?>