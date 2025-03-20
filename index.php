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

var_dump($data);

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
    <table border="1" cell spassing>
        <thead>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>E020323052</td>
                <td>Salsabila Grima</td>
            </tr>
            <tr>
                <td>2</td>
                <td>E020323056</td>
                <td>Zukimi</td>
            </tr>
        </tbody>
</body>
</html>