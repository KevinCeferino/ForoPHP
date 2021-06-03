<?php
include 'sql/sql.php';
$db = new DB;
if(isset($_GET['p']) && !empty($_GET['p'])){
    $p = $_GET['p'];
    if($_GET['p'] == 'nosotros'){
        include 'views/pages/nosotros.php';
    }else if($_GET['p'] == 'login'){
        include 'views/pages/login.php';
    }else if($_GET['p'] == 'register'){
        include 'views/pages/register.php';
    }else if($_GET['p'] == 'logout'){
        include 'controller/logout.php';
    }
    else{
        include 'views/errors/404.php';
    }

}else{
    include 'views/pages/home.php';
}