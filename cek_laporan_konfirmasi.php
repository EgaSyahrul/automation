<?php
require ('koneksi.php');
$data = $_GET['id_penukaran'];
mysqli_query($koneksi, "UPDATE `penukaran` SET `status`='3' WHERE id_penukaran = '$data'");
header("Location:laporan_penukaran.php?pesan=status_complete-succesfull");
?>