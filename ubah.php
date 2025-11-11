<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nisn = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi, "update mahasiswa set kode_mahasiswa='$kode_mahasiswa', nama_mahasiswa='$nama_mahasiswa', nisn='$nisn', jurusan='$jurusan', alamat='$alamat' where kode_mahasiswa='$kode_mahasiswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>

