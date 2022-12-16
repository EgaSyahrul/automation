<?php
require ('koneksi.php');
$id = $_POST['id_sampah'];
$nama = $_POST['txt_nama'];
$jenis = $_POST['txt_jenis'];
$point = $_POST['txt_point'];
$harga = $_POST['txt_harga'];
mysqli_query($koneksi, "INSERT INTO `daftar_sampah`(`id_sampah`, `nama_sampah`, `jenis_sampah`, `jumlah_sampah`, `point`, `harga_jual`) VALUES ('$id','$nama','$jenis',0,'$point','$harga')");
header("Location:home.php?pesan=add-succesfull");
?>