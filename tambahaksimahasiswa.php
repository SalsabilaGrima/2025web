<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir= $_POST["tanggal_lahir"];
$telepon = $_POST["telepon"];
$email = $_POST["email"];
$id = $_POST["id"];


$query="INSERT INTO mahasiswa (nim, nama, tanggal_lahir, telepon, email, id) VALUES ('$nim', '$nama', '$tanggal_lahir', '$telepon', '$email', '$id')";

mysqli_query($conn, $query);

header("location:index.php");

?>