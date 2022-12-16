<?php
require ('koneksi.php');
$kodeBarang = $_GET['kode_transaksi'];
$data = $_GET['id_sampah'];
$sebelum = $_GET['quantity'];
$sqlll = mysqli_query($koneksi, "SELECT jumlah_sampah FROM daftar_sampah where id_sampah = '$data'");
$simpan = mysqli_fetch_array($sqlll);
$jumlah = $simpan['jumlah_sampah'];
$total = $jumlah - $sebelum;
echo $total;
$sqllll = mysqli_query($koneksi, "UPDATE `daftar_sampah` SET `jumlah_sampah`='$total' where id_sampah = '$data'");
mysqli_query($koneksi, "DELETE FROM laporan_beli WHERE kode_transaksi = '$kodeBarang' AND id_sampah = '$data'");
header("Location:transaksi.php?kode_transaksi=$kodeBarang");
?>