<?php
$koneksi = mysqli_connect("localhost","root","","prakweb_2023_b_213040075");
if($koneksi == TRUE){
   // echo "Berhasil Terhubung";
}else{
    echo "Gagal Terhubung";
}