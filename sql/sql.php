<?php

class DB
{
    function connect(){
        $con = mysqli_connect('localhost','root','','nea');
        return $con;
    }
    function query($table,$dates,$where){
        $db = new DB;
        $con =$db->connect();
        if($where == null){
            $q= "SELECT $dates FROM $table";
        }else{
            $q= "SELECT $dates FROM $table WHERE $where";
        }
        return mysqli_query($con,$q);
    }
}


?>