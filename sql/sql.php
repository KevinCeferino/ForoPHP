<?php

class DB
{
    function connect(){
        $con = mysqli_connect('localhost','root','','nea');
        return $con;
    }
    function select($dates,$table,$where){
        $db = new DB;
        $con =$db->connect();
        if($where == null){
            $q= "SELECT $dates FROM $table";
        }else{
            $q= "SELECT $dates FROM $table WHERE $where";
        }
        return mysqli_query($con,$q);
    }

    function allQuery($q){
        $db = new DB;
        $con = $db->connect();
        return mysqli_query($con, $q);
    }
}


?>