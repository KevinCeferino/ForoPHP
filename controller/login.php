<?php
include '../sql/sql.php';
session_start();
$db= new DB;
if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $con=$db->query("*","user","email = '$email' AND password = '$password'");
    $data=mysqli_fetch_array($con);
    if($data['email'] == $email && $data['password'] == $password){
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        header("location: /php/?p=inicio");
    }
}