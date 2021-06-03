<?php
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    session_unset();
    session_destroy();
    header("location: /php");
}else{
    header("location: /php");
}