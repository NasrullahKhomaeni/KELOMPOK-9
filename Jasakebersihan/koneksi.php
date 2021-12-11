<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_jasa");
 
    if (!$koneksi){
        echo "Koneksi database mysqli gagal!!! " . mysqli_connect_error();
        
    }
?>