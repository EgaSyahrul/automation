<?php
include 'koneksi.php';
// pemanggilan input txt
$kode = $_POST['kode'];
$quantity = $_POST['quantity'];
$kodeBarang = $_POST['kode_transaksi'];
// input data ke laporan beli
$query = "SELECT * FROM `laporan_beli` WHERE kode_transaksi = '$kodeBarang'";
$result = mysqli_query($koneksi,$query);
$num = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result)){
	$userSI = $row['id_sampah'];
	$userJS = $row['jumlah_sampah'];
	$userP = $row['point'];
    }
	
	if($userSI == $kode){
		// pemanggilan point
		$sqll = mysqli_query($koneksi, "SELECT point FROM daftar_sampah where id_sampah = '$kode'");
		$data = mysqli_fetch_array($sqll);
		$point = $data['point'];
		$totalPoint = $point * $quantity;
		// input data baru ke daftar sampah
		$sqlll = mysqli_query($koneksi, "SELECT jumlah_sampah FROM daftar_sampah where id_sampah = '$kode'");
		$simpan = mysqli_fetch_array($sqlll);
		$jumlah = $simpan['jumlah_sampah'];
		$sebelum = $_POST['quantity'];
		$total = $sebelum + $jumlah;
		echo $total;
		$sqllll = mysqli_query($koneksi, "UPDATE `daftar_sampah` SET `jumlah_sampah`='$total' where id_sampah = '$kode'");
		// input data transaksi
		$www = $quantity + $userJS;
		$sementara = $totalPoint + $userP;
		$sql="UPDATE `laporan_beli` SET `jumlah_sampah`='$www',`point`='$sementara' WHERE kode_transaksi='$kodeBarang' AND id_sampah='$kode'";
		mysqli_query($koneksi,$sql);
		header("Location:transaksi.php?kode_transaksi=$kodeBarang");
	}elseif($userSI != $kode){
		// pemanggilan point
		$sqll = mysqli_query($koneksi, "SELECT point FROM daftar_sampah where id_sampah = '$kode'");
		$data = mysqli_fetch_array($sqll);
		$point = $data['point'];
		$totalPoint = $point * $quantity;
		// input data baru ke daftar sampah
		$sqlll = mysqli_query($koneksi, "SELECT jumlah_sampah FROM daftar_sampah where id_sampah = '$kode'");
		$simpan = mysqli_fetch_array($sqlll);
		$jumlah = $simpan['jumlah_sampah'];
		$sebelum = $_POST['quantity'];
		$total = $sebelum + $jumlah;
		echo $total;
		$sqllll = mysqli_query($koneksi, "UPDATE `daftar_sampah` SET `jumlah_sampah`='$total' where id_sampah = '$kode'");
		//pemanggilan nama sampah
		$query1 = mysqli_query($koneksi, "SELECT nama_sampah FROM daftar_sampah where id_sampah = '$kode'");
		$yuk = mysqli_fetch_array($query1);
		$nama = $yuk['nama_sampah'];
		// input data transaksi
		$sql = "INSERT INTO laporan_beli (kode_transaksi, id_sampah, nama_sampah, jumlah_sampah, point) VALUES ('$kodeBarang','$kode','$nama','$quantity','$totalPoint')";
		mysqli_query($koneksi,$sql);
		header("Location:transaksi.php?kode_transaksi=$kodeBarang");
	}else{
        header('Location:transaksi.php?gagal');
    }
	mysqli_close($koneksi);
?>