<?php
require ('koneksi.php');
$data = $_GET['id_sampah'];
mysqli_query($koneksi, "DELETE FROM daftar_sampah WHERE id_sampah = '$data'");
header("Location:home.php?pesan=hapus-succesfull");
?>