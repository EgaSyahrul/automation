<?php
header('Content-Type: application/json; charset=utf8');
require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['nama']) && $_POST['nama'] != "" && isset($_POST['password']) && $_POST['password'] != "" && isset($_POST['role']) && $_POST['role'] != "") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $nama = $_POST['nama'];
        $query = "SELECT * FROM akun
        -- where username='$username'
        ";
        $cek = mysqli_query($connect, $query);
        $count = mysqli_num_rows($cek);

        if($count == 1){
            echo json_encode("gagal");
            
        } else {
            $sql1 = "INSERT INTO `akun`(`username`, `password`, `role`) VALUES ('$username','$password','$role')";
            $link1 = mysqli_query($connect,$sql1);
            if($link1){
                $sql2 = mysqli_query($connect, "SELECT max(id_pengguna) as kodeTerbesar FROM pengguna");
                $data = mysqli_fetch_array($sql2);
                $idPengguna = $data['kodeTerbesar'];
                $urutan = (int) substr($idPengguna, 5, 5);
                $urutan++;  
                $huruf = "P-";
                $idPengguna = $huruf . sprintf("%05s", $urutan);
                // echo $idPengguna;
                
                $sql3 = "INSERT INTO `pengguna`(`id_pengguna`, `nama_lengkap`, `telepon`, `alamat1`, `alamat2`, `alamat3`, `point`, `username`) VALUES ('$idPengguna','$nama','-','-','-','-','0','$username')";
                $link3 = mysqli_query($connect,$sql3);
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