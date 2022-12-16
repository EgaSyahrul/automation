<?php
include 'koneksi.php';
//pemanggilan text feild
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$nama = $_POST['pegawai'];
$kodeBarang = $_POST['kode_transaksi'];
$grand = $_POST['grand'];
$pelanggan = $_POST['pelanggan'];
//pemanggilan point pelanggan
$query = mysqli_query($koneksi, "SELECT point FROM pengguna WHERE id_pengguna = '$pelanggan'");
$data = mysqli_fetch_array($query);
$se = $data['point'];
$total = $se + $grand;
//input total ke pelanggan
$sqll = "UPDATE `pengguna` SET `point`='$total' WHERE id_pengguna = '$pelanggan'";
//input transaksi beli
$sql = "INSERT INTO transaksi_beli(kode_transaksi, tanggal, waktu, nama_lengkap, total_point, id_pengguna) VALUES ('$kodeBarang','$tgl','$jam','$nama','$grand','$pelanggan')";
if (mysqli_query($koneksi, $sql)) {
	mysqli_query($koneksi, $sqll);
	header("Location:transaksi.php?berhasil");
} else {
	header("Location:transaksi.php?gagal");
}
mysqli_close($koneksi);
?>