<!DOCTYPE html>
<html>
<head>
    <title>CRUD MAHASISWA</title>
    <style>
        body { font-family: sans-serif; }
        h2, h3 { text-align: center; }
        .container {
            background-color: #7ef4ffff; /* Warna krem */
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            margin: auto;
        }
        input[type="submit"] {
            background-color: #FFFFE0; /* Kuning pucat */
            border: 1px solid #a2fff4ff;
        }
        a { color: #8aebfeff; } /* Warna link biru */
    </style>
</head>
<body>

    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/><br/>
    
    <div class="container">
        <h3>TAMBAH DATA MAHASISWA</h3>
        <form method="post" action="tambah_aksi.php">
            <table>
                <tr>
                    <td>Kode Mahasiswa</td>
                    <td><input type="text" name="kode_mahasiswa" required></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><input type="text" name="nama_mahasISwa" required></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td><input type="number" name="nisn" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>