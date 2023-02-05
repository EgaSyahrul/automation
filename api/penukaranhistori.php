<?php
require('koneksi.php');
$idPengguna = $_POST['id_Pengguna'];
$result = $connect->query("SELECT * FROM `penukaran` WHERE id_pengguna = '$idPengguna' ORDER BY id_penukaran DESC;");
$list = array();
if($result){
    while($row= $result->fetch_assoc()){
        $list[]= $row;
    }
    echo json_encode($list);
}
?>