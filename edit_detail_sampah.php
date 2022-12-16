<?php 
include('koneksi.php');
$kode = $_POST['txt_id'];
$nama = $_POST['txt_nama'];
$jenis = $_POST['txt_jenis'];
$point = $_POST['txt_point'];
$harga = $_POST['txt_harga'];
$sql = "UPDATE `daftar_sampah` SET `nama_sampah`='$nama',`jenis_sampah`='$jenis',`point`='$point',`harga_jual`='$harga' WHERE `id_sampah` = '$kode'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location:home.php?pesan=edit-succesfull");
    } else {
        header('Location:detail_sampah.php?pesan=kosong');
    }
    mysqli_close($koneksi);
    ?>
    