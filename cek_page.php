<?php
$pelanggan='p-00001';
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT point FROM pengguna WHERE id_pengguna = '$pelanggan'");
$data = mysqli_fetch_array($query);
$harga = $data['point'];
echo $harga;
?>