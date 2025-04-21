<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET ['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim= '$nim'";
$datamahasiswa = ambildata($querymahasiswa);
$datamahasiswa = $datamahasiswa[0];


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="editaksimahasiswa.php" method="post">
        <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim" require value="<?= $datamahasiswa['nim']; ?>"readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" require value="<?= $datamahasiswa['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" require value="<?= $datamahasiswa['tanggal_lahir']; ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="telepon" require value="<?= $datamahasiswa['telepon']; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" require value="<?= $datamahasiswa['email']; ?>"></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
            <select name="id">
                    <?php foreach($data as $d) : ?>
                    <option value="<?php echo $d['id'] ?>"
                    <?=
                    ($d['id'] == $datamahasiswa['id']) ?
                    "SELECTED" : ""
                     ?>
                    ><?php echo $d['nama'] ?> </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
       </table>
       <button type="submit">Simpan</button>
       <button>
       <a href="index.php">Kembali</a>
       </button>
</form>
<br>
</body>
</html>
