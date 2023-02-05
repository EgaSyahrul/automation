<?php
require('koneksi.php');
// $connect = new mysqli("localhost","root","","rushbin");
$idPengguna = $_POST['id_Pengguna'];
$result = $connect->query("SELECT * FROM `pengguna` WHERE id_pengguna = '$idPengguna'");
$list = array();
if($result){
    while($row= $result->fetch_assoc()){
        $list[]= $row;
    }
    echo json_encode($list);
}
?>