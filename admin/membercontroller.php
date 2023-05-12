<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Member.php';

//step pertama yaitu menangkap request form
$username = $_POST['username'];
$password = $_POST['password'];

//menangkapan form diatas dijadikan array
$data = [
    $username,
    $password
];
$model = new Member();
$rs = $model->cekLogin($data);
if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('Location:http://localhost:8080/webnative/admin/index.php?url=product');
}
else {
    echo '<script> alert("user/password anda salah");history.back();</script>';
}

?>