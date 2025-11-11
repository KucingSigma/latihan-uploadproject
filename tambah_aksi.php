<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nisn = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (kode_mahasiswa, nama_mahasiswa, nisn, jurusan, alamat) VALUES('$kode_mahasiswa', '$nama_mahasiswa', '$nisn', '$jurusan', '$alamat')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>

