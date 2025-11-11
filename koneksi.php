<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "mahasiswa");

// cek koneksi
if(mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>