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
}