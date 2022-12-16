<?php
include 'koneksi.php';
// pemanggilan input txt
$kode = $_POST['kode'];
$quantity = $_POST['quantity'];
$p = $_POST['transaksi'];
// input data ke laporan jual
$query = "SELECT * FROM `laporan_jual` WHERE kode_transaksi = '$p'";
$result = mysqli_query($koneksi,$query);
$num = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result)){
	$userSI = $row['id_sampah'];
	$userJS = $row['jumlah_sampah'];
	$userP = $row['total'];
    }
	
	if($userSI == $kode){
		// pemanggilan harga
		$sqll = mysqli_query($koneksi, "SELECT harga_jual FROM daftar_sampah where id_sampah = '$kode'");
		$data = mysqli_fetch_array($sqll);
		$harga = $data['harga_jual'];
		$totalharga = $harga * $quantity;
		// input data baru ke daftar sampah
		$sqlll = mysqli_query($koneksi, "SELECT jumlah_sampah FROM daftar_sampah where id_sampah = '$kode'");
		$simpan = mysqli_fetch_array($sqlll);
		$jumlah = $simpan['jumlah_sampah'];
		$sebelum = $_POST['quantity'];
		$total = $jumlah - $sebelum;
		echo $total;
		$sqllll = mysqli_query($koneksi, "UPDATE `daftar_sampah` SET `jumlah_sampah`='$total' where id_sampah = '$kode'");
		// input data transaksi
		$www = $quantity + $userJS;
		$sementara = $totalharga + $userP;
		$sql="UPDATE `laporan_jual` SET `jumlah_sampah`='$www',`total`='$sementara' WHERE kode_transaksi='$p' AND id_sampah='$kode'";
		mysqli_query($koneksi,$sql);
		header("Location:transaksi_jual.php?kode_transaksi=$kodeBarang");
	}elseif($userSI != $kode){
		// pemanggilan harga
		$sqll = mysqli_query($koneksi, "SELECT harga_jual FROM daftar_sampah where id_sampah = '$kode'");
		$data = mysqli_fetch_array($sqll);
		$harga = $data['harga_jual'];
		$totalharga = $harga * $quantity;
		// input data baru ke daftar sampah
		$sqlll = mysqli_query($koneksi, "SELECT jumlah_sampah FROM daftar_sampah where id_sampah = '$kode'");
		$simpan = mysqli_fetch_array($sqlll);
		$jumlah = $simpan['jumlah_sampah'];
		$sebelum = $_POST['quantity'];
		$total = $jumlah - $sebelum;
		echo $total;
		$sqllll = mysqli_query($koneksi, "UPDATE `daftar_sampah` SET `jumlah_sampah`='$total' where id_sampah = '$kode'");
		//pemanggilan nama sampah
		$query1 = mysqli_query($koneksi, "SELECT nama_sampah FROM daftar_sampah where id_sampah = '$kode'");
		$yuk = mysqli_fetch_array($query1);
		$nama = $yuk['nama_sampah'];
		// input data ke laporan jual
		$sql = "INSERT INTO laporan_jual (kode_transaksi, id_sampah, nama_sampah, jumlah_sampah, total) VALUES ('$p','$kode','$nama','$quantity','$totalharga')";
		mysqli_query($koneksi,$sql);
		header("Location:transaksi_jual.php?kode_transaksi=$p");
	}else {
		header("Location:transaksi_jual.php?gagal");
	}
	mysqli_close($koneksi);
?>