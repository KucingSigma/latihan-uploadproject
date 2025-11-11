<!DOCTYPE html>
<html>
<head>
    <title>CRUD MAHASISWA</title>
    <style>
        body { font-family: sans-serif; }
        h2 { text-align: center; }
        .container {
            background-color: #3dd5ffff; /* Warna krem */
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid #593150ff; /* Border coklat */
            padding: 8px;
        }
        th { background-color: #8ce8ffff; } /* Header tabel */
        td { background-color: #ffffffff; } /* Data tabel */
        a { color: #6c6c6cff; } /* Warna link biru */
    </style>
</head>
<body>

<h2>CRUD DATA MAHASISWA</h2>

<div class="container">
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/><br/>
    <table border="1">
    <tr>
        <th>NO</th>
        <th>Kode Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>NISN</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from mahasiswa");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kode_mahasiswa']; ?></td>
        <td><?php echo $d['nama_mahasiswa']; ?></td>
        <td><?php echo $d['nisn']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
            <a href="update.php?id=<?php echo $d['kode_mahasiswa']; ?>">UPDATE</a>
            <a href="hapus.php?id=<?php echo $d['kode_mahasiswa']; ?>">DELETE</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </table>
</div>

</body>
</html>