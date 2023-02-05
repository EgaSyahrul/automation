<?php
header('Content-Type: application/json; charset=utf8');
require_once('koneksi.php');

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['id_pengguna']) && $_POST['id_pengguna'] != "") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $telepon = $_POST['telepon'];
        $alamat1 = $_POST['alamat1'];
        $alamat2 = $_POST['alamat2'];
        $alamat3 = $_POST['alamat3'];
        $nama = $_POST['nama_lengkap'];
        $idPengguna = $_POST['id_user'];
        $query = "SELECT * FROM akun
        --  where username='$username'
         ";
        $cek = mysqli_query($connect, $query);
        $count = mysqli_num_rows($cek);

        if($count == 1){
            echo json_encode("gagal");
            
        } else {
            $sql1 = "UPDATE `akun` SET `password`='$password' WHERE `username`='$username';";
            $link1 = mysqli_query($connect, $sql1);
            if($link1){
                $sql3 = "UPDATE `pengguna` SET `nama_lengkap`='$nama',`telepon`='$telepon',`alamat1`='$alamat1',`alamat2`='$alamat2',`alamat3`='$alamat3' WHERE `id_pengguna`='$idPengguna' AND `username`='$username';";
                $link3 = mysqli_query($connect, $sql3);
                echo json_encode("berhasil");
            }
        }
    // }
// } else {
//     echo json_encode(
//         array(
//             'code' => 400,
//             'status' => 'REQUEST METHOD GAGAL!!!',
//         )
//     );
// }
?>