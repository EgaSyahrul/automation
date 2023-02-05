<?php
require('koneksi.php');
$idPengguna = $_POST['id_Pengguna'];
$result = $connect->query("SELECT * FROM `transaksi_beli` WHERE id_pengguna = '$idPengguna' ORDER BY kode_transaksi DESC;");
$list = array();
if($result){
    while($row= $result->fetch_assoc()){
        $list[]= $row;
    }
    echo json_encode($list);
}
?>