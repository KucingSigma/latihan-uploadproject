<!DOCTYPE html>
<html>
<head>
    <title>CRUD MAHASISWA</title>
    <style>
        body { font-family: sans-serif; }
        h2, h3 { text-align: center; }
        .container {
            background-color: #7ff4ffff; /* Warna krem */
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            margin: auto;
        }
        input[type="submit"] {
            background-color: #b6faffff; /* Kuning pucat */
            border: 1px solid #92f2ffff;
        }
        input[readonly] { background-color: #eee; } /* Input yg tidak bisa diisi */
        a { color: #7effe7ff; } /* Warna link biru */
    </style>
</head>
<body>

    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/><br/>
    
    <div class="container">
        <h3>EDIT DATA MAHASISWA</h3>

        <?php
        include 'koneksi.php';
        $kode_mahasiswa_get = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from mahasiswa where kode_mahasiswa='$kode_mahasiswa_get'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="ubah.php">
                <table>
                    <tr>
                        <td>Kode Mahasiswa</td>
                        <td>
                            <input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                            <input type="text" value="<?php echo $d['kode_mahasiswa']; ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td><input type="text" name="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td><input type="number" name="nisn" value="<?php echo $d['nisn']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>
    </div>

</body>
</html>