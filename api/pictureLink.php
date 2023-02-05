<?php
// require_once('koneksi.php');
$koneksi = mysqli_connect("localhost","wstifci1_banksampah","Polije1234","wstifci1_banksampah");

//get image name
$image = $_FILES['image']['name']; 

//make image path
$imagePath = '../uploads/'.$image;

$tmp_name = $_FILES['image']['tmp_name']; 

//move image to images folder   
move_uploaded_file($tmp_name, $imagePath);

// $result = mysqli_query($connect, "INSERT INTO `pickup`(`id_pengantaran`, `id_pengguna`, `nama_lengkap`, `alamat`, `tanggal`, `status`, `gambar1`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]');");

// if($result){
//     echo json_encode([
//         'message' => 'Data input successfully'
//     ]);
// }else{
//     echo json_encode([
//         'message' => 'Data Failed to input'
//     ]);
// }
?>