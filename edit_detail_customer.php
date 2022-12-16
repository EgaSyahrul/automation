<?php 
include('koneksi.php');
$kode = $_POST['txt_kode'];
$nama = $_POST['txt_nama'];
$telepon = $_POST['txt_telepon'];
$alamat1 = $_POST['txt_alamat1'];
$alamat2 = $_POST['txt_alamat2'];
$alamat3 = $_POST['txt_alamat3'];
$sql = "UPDATE `pengguna` SET `nama_lengkap`='$nama',`telepon`='$telepon',`alamat1`='$alamat1',`alamat2`='$alamat2',`alamat3`='$alamat3' WHERE `id_pengguna` = '$kode'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location:customer.php?pesan=edit-succesfull");
    } else {
        header('Location:detail_customer.php?pesan=kosong');
    }
    mysqli_close($koneksi);
    ?>
    