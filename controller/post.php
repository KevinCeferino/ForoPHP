<?php

session_start();
include '../sql/sql.php';
$db=new DB;
if(!empty($_SESSION['id']) && $_SESSION['id'] == 1 && !empty($_POST['deletePost'])){
    $idPost = $_POST['deletePost'];
    $q="DELETE FROM post WHERE id='$idPost';";
    if($db->allQuery($q)){
        $q="DELETE FROM comments where commentIdPost='$idPost';";
        if($db->allQuery($q)){
            header("location: ../");
        }else{
            header("location: ../q=semifalse");
        }
    }else{
        header("location: ../q=false");
    }
}else if(!empty($_SESSION['id']) && isset($_POST['crearPost']) && !empty($_POST['post']) && isset($_POST['post'])){
    $idUser=$_SESSION['id'];
    $contentPost=$_POST['post'];
    $q="INSERT INTO `post` (`postIdUser`, `content`, `likes`, `date`) VALUES ('$idUser', '$contentPost', '0', current_timestamp());";
    if($db->allQuery($q)){
            header("location: ../");
    }else{
        header("location: ../q=false");
    }
}