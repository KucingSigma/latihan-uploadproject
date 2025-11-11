<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kode_mahasiswa = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"delete from mahasiswa where kode_mahasiswa='$kode_mahasiswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
