<?php
session_start();
include 'koneksi.php';


$email = $_POST['email'];
$password = sha1($_POST['password']);

$queryLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");

// //untuk cek eror
// echo 'jalan kesini';
// die;
// //End untuk cek eror
if (mysqli_num_rows($queryLogin) > 0) {
    $rowUser = mysqli_fetch_assoc($queryLogin);
    if ($rowUser['password'] == $password) {
        $_SESSION['NAMA'] = $rowUser['nama'];
        $_SESSION['ID'] = $rowUser['id'];
        header("location:index.php?login=berhasil");
        # code...
    }
} else {
    header("location:login.php?error=login");
}
