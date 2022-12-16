<?php
include 'koneksi.php';
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$nama = $_POST['pegawai'];
$kodeBarang = $_POST['kode_transaksi'];
$grand = $_POST['grand'];
$sql = "INSERT INTO transaksi_jual(kode_transaksi, tanggal, waktu, nama_lengkap, total_pembelian) VALUES ('$kodeBarang','$tgl','$jam','$nama','$grand')";
if (mysqli_query($koneksi, $sql)) {
	header("Location:transaksi_jual.php?berhasil");
} else {
	header("Location:transaksi_jual.php?gagal");
}
mysqli_close($koneksi);
?>