<?php
header('Content-Type: application/json; charset=utf8');
require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['status'] != "" && isset($_POST['id_user']) && $_POST['id_user'] != "") {
        $tanggal = $_POST['tanggal'];
        $gambar1 = $_POST['gambar1'];
        $gambar2 = $_POST['gambar2'];
        $gambar3 = $_POST['gambar3'];
        $status = $_POST['status'];
        $idPengguna = $_POST['id_user'];
        $deskripsi = $_POST['deskripsi'];
        $alamat = $_POST['alamat'];

        $query = "SELECT * FROM pickup";
        $cek = mysqli_query($connect, $query);
        $count = mysqli_num_rows($cek);

        if($count == 0){
            echo json_encode("gagal");
            
        } else {
            $sql1 = mysqli_query($connect, "SELECT `nama_lengkap` FROM `pengguna` WHERE id_pengguna = '$idPengguna';");
            $data = mysqli_fetch_array($sql1);
            $nama = $data['nama_lengkap'];

            $sql2 = mysqli_query($connect, "SELECT max(id_pengantaran) as kodeTerbesar FROM pickup");
            $data = mysqli_fetch_array($sql2);
            $link = $data['kodeTerbesar'];
            $urutan = (int) substr($link, 5,5);
            $urutan++;
            $huruf = "P-";
            $idPengantaran = $huruf . sprintf("%08s",$urutan);

            $insert = "INSERT INTO `pickup`(`id_pengantaran`, `id_pengguna`, `nama_lengkap`, `alamat`, `tanggal`, `status`, `gambar1`, `gambar2`, `gambar3`, `deskripsi`) 
            VALUES ('$idPengantaran','$idPengguna','$nama','$alamat','$tanggal','$status','$gambar1','$gambar2','$gambar3','$deskripsi');";
            $cek = mysqli_query($connect,$insert);
            if($cek){
                echo json_encode("berhasil");
            }
        }
    }
} else {
    echo json_encode(
        array(
            'code' => 400,
            'status' => 'REQUEST METHOD GAGAL!!!',
        )
    );
}
?>