<?php

class DB
{
    function connect(){
        return mysqli_connect('localhost','root','','nea');
    }
}


?>