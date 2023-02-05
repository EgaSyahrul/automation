<?php
header('Content-Type: application/json; charset=utf8');
require('koneksi.php');
// $connect = new mysqli("localhost","root","","rushbin");

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['id_pengguna']) && $_POST['id_pengguna'] != "") {
        $point = $_POST['point'];
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d");
        $idPengguna = $_POST['idPengguna'];
        $jam = date("h:i:s");
        $query = "SELECT * FROM penukaran";
        $cek = mysqli_query($connect, $query);
        $count = mysqli_num_rows($cek);

        if($point <= "500"){
            echo json_encode("eaaaa");
            
        } else {

            $sql2 = mysqli_query($connect, "SELECT max(id_penukaran) as kodeTerbesar FROM penukaran");
            $data = mysqli_fetch_array($sql2);
            $link = $data['kodeTerbesar'];
            $urutan = (int) substr($link, 5,5);
            $urutan++;
            $huruf = "PN-";
            $idPenukaran = $huruf . sprintf("%07s",$urutan);
            
            $sql1 = "INSERT INTO `penukaran`(`id_penukaran`, `id_pengguna`, `point`, `nominal`, `tanggal`, `waktu`, `status`) VALUES ('$idPenukaran','$idPengguna','500','50000','$tanggal','$jam','1');";
            $link1 = mysqli_query($connect, $sql1);
            if($link1){
                $sql3 = mysqli_query($connect, "SELECT point as kodeTerbesar FROM pengguna WHERE id_pengguna = '$idPengguna';");
                $data = mysqli_fetch_array($sql3);
                $link = $data['kodeTerbesar'];
                $sementara = $link - 500;
                $sql4 = mysqli_query($connect, "UPDATE `pengguna` SET `point`='$sementara' WHERE id_pengguna = '$idPengguna';");
                echo json_encode("berhasil");
            } else {
                
            echo json_encode("eaaa");
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