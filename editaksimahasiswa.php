<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir= $_POST["tanggal_lahir"];
$telepon = $_POST["telepon"];
$email = $_POST["email"];
$id = $_POST["id"];


$query=" UPDATE mahasiswa SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', telepon = '$telepon', email = '$email', id = '$id'
WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");

?>