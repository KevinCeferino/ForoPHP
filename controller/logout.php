<?php
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    session_unset();
    session_destroy();
    header("location: ../");
}else{
    header("location: ../");
}