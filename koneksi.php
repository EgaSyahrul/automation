<?php 
$koneksi = mysqli_connect("localhost","wstifci1_banksampah","Polije1234","wstifci1_banksampah");
// Check connection
if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>