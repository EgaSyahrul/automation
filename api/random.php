<?php
$connect = new mysqli("localhost","root","","rushbin");
$idPengguna = "P-00001";
                $sql3 = mysqli_query($connect, "SELECT max(point) as kodeTerbesar FROM pengguna WHERE id_pengguna = '$idPengguna';");
                $data = mysqli_fetch_array($sql3);
                $link = $data['kodeTerbesar'];
                $sementara = $link - 500;
                echo $sementara;
?>