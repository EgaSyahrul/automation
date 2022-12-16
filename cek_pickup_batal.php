<?php
require ('koneksi.php');
$data = $_GET['id_pengantaran'];
mysqli_query($koneksi, "UPDATE `pickup` SET `status`='1' WHERE id_pengantaran = '$data'");
header("Location:pickup.php?pesan=status_notcomplete-succesfull");
?>