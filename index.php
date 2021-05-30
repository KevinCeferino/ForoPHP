<?php
include 'sql/sql.php';
$db = new DB;
$db->connect();
if(isset($_GET['p']) && !empty($_GET['p'])){
    if($_GET['p'] == 'nosotros'){
        include 'views/pages/nosotros.php';
    }else{
        include 'views/errors/404.php';
    }

}else{
    include 'views/pages/home.php';
}