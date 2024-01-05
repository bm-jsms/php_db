<?php

$server = "";
$databse = "";
$username = "";
$password = ""; 

$connection = new PDO("mysql:host=$server;dbname=$databse", $username, $password);

$setname = $connection->prepare("SET NAMES 'utf8'");
$setname->execute();

var_dump($setname);

?>