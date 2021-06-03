<?php
include '../sql/sql.php';
session_start();
$db = new DB;
if (!empty($_SESSION['id']) && isset($_SESSION['id'])) {
    if (isset($_POST['contentComment']) && !empty($_POST['contentComment']) && !empty($_POST['post'])) {
        $idUser = $_SESSION['id'];
        $idPost = $_POST['post'];
        $contentComment = $_POST['contentComment'];

        echo $idPost.$idUser.$contentComment;
        $q="INSERT INTO `comments` (`id`, `commentIdUser`, `commentIdPost`, `commentContent`, `dateComment`) VALUES (NULL, '$idUser', '$idPost', '$contentComment', current_timestamp());";
        if($db->allQuery($q)){
            header("location: ../#$idPost");
        }else{
            header("location: ../?q=false");
        }
    }else{
        echo "2";
    }
}else{
    echo "a";
}
