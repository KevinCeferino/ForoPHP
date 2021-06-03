<?php
include 'sql.php';

$db=new DB;
$q[0] ="DROP TABLE `user`;";
$q[1] ="CREATE TABLE `user` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `email` varchar(50) NOT NULL, `password` varchar(255) NOT NULL, `rol` int(11) NOT NULL, PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q[2] ="INSERT INTO `user` (`name`, `email`, `password`, `rol`) VALUES ('KevinAdmin', 'admin@test.com', '7039415eee740202ad51f6877e00fb0ef8f007c9', '1');";
$q[3] ="INSERT INTO `user` (`name`, `email`, `password`, `rol`) VALUES ('KevinUser', 'user@test.com', '314003206f795b358b442f8f533994cbbfbdc6ce', '0');";
$q[4] ="SELECT * FROM user";
for ($i=0; $i < count($q); $i++) { 
    if($db->allQuery($q[$i])){
        echo "creada";
    }
}
