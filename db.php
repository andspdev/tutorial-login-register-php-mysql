<?php

// Ganti localhost, root, katasandi, dan nama database sesuai dengan punya kalian
$con = mysqli_connect("localhost", "root", "", "dailyblogid_db");

// Cek apakah berhasil terkoneksi atau tidak
if (mysqli_connect_errno()) 
{
    echo "Gagal terhubung ke database: ".mysqli_connect_error();
}

?>