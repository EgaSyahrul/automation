<?php
require ('koneksi.php');
$data = $_GET['id_pengguna'];
mysqli_query($koneksi, "DELETE FROM `pengguna` WHERE `id_pengguna` = '$data'");
header("Location:customer.php?pesan=hapus-succesfull");
?>