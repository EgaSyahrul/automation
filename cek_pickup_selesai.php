<?php
require ('koneksi.php');
$data = $_GET['id_pengantaran'];
mysqli_query($koneksi, "UPDATE `pickup` SET `status`='2' WHERE id_pengantaran = '$data'");
header("Location:pickup.php?pesan=status_complete-succesfull");
?>