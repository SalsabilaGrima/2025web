<?php
$servername = "localhost";
$database = "4a";
$username = "root"; 
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query  = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($conn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
    $data[] = $baris;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <a href="tambahmahasiswa.php">Tambah</a>
    <table border="1" cell spassing>
    <thead>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
        </thead>
        <tbody>

        <?php
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"] ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["tanggal_lahir"] ?></td>
                <td><?php echo $d["telepon"] ?></td>
                <td><?php echo $d["email"] ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
</body>
</html>