<?php
include '../sql/sql.php';
session_start();
$db = new DB;
if (isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = sha1(md5($_POST['password']));

    if ($con = $db->select("*", "user", "email = '$email' AND password = '$password'")) {
        $data = mysqli_fetch_array($con);
        if ($data['email'] == $email && $data['password'] == $password) {
            $_SESSION['id'] = $data['id'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['rol'] = $data['rol'];
            header("location: ../");
        }else{
            header("location: ../");
        }
    }else{
        header("location: ../");

    }
}
