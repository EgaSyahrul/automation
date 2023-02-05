<?php
require ('koneksi.php');
$data = $_GET['id_penukaran'];
mysqli_query($koneksi, "UPDATE `penukaran` SET `status`='2' WHERE id_penukaran = '$data'");
header("Location:laporan_penukaran.php?pesan=status_notcomplete-succesfull");
?>