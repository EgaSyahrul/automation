<?php
require_once('koneksi.php');
$json = file_get_contents('php://input');
$obj = json_decode($json,true);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($obj["username"]) && isset($obj["password"])) {
        // $_GET['username']) && $_GET['username'] != "" && isset($_GET['password']) && $_GET['password'] != "" ) {
   
        $username = mysqli_real_escape_string($connect,$obj['username']);
        $password = mysqli_real_escape_string($connect,$obj['password']);
        // $username = $_GET['username'];
        // $password = $_GET['password'];

        // $query = "SELECT * FROM akun WHERE username='$username' AND password ='$password'";
        // $cek = mysqli_query($connect, $query);
        // $count = mysqli_num_rows($cek);
        // $sql = "SELECT * FROM pengguna WHERE username='$username'";
        // $res=$connect->query($sql);
        $set = [];

        $query = "SELECT * FROM akun WHERE username='$username' AND password ='$password'";
        $res=$connect->query($query);

        if($res->num_rows>0){
            // $sql = "SELECT * FROM pengguna WHERE username='$username'";
            $sql = "SELECT * FROM pengguna JOIN akun ON akun.username=pengguna.username WHERE pengguna.username='$username'";
            $res=$connect->query($sql);
            $row=$res->fetch_assoc();
            $set['loginStatus']=true;
            $set['message']="Login Successfully";
        // $set['message']="berhasil login";

            $set["userInfo"]=$row;
        } else {
            $set['loginStatus']=false;
            $set['message']="Mohon cek kembali email dan password anda";
            // $set['message']="gagal login";
        };

        $json_data=json_encode($set);

        echo $json_data;

    }
// } else {
//     echo json_encode(
//         array(
//             'code' => 400,
//             'status' => 'REQUEST METHOD GAGAL!!!',
//         )
//     );
// }
?>