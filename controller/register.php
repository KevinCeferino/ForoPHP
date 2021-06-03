<?php
include '../sql/sql.php';
session_start();
$db= new DB;
if(isset($_POST['register']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1(md5($_POST['password']));
    $q="INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
    if($db->allQuery($q)){
        header("location: /php/?p=register&q=true");
    }else{
        header("location: /php/?p=register&q=false");
    }
}