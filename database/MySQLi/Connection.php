<?php

$server = "";
$databse = "";
$username = "";
$password = ""; 

/* 
    # Procedural way to connect to database
    $mysqli = mysql_connect($server, $username, $password, $databse); 
*/
/* 
    # Check connection with procedural way
    if(!$mysqli){
        die("Connection failed: " . mysqli_connect_error());
    }
*/


# Object Oriented way to connect to database
$mysqli = new mysqli($server, $username, $password, $databse);

# Check connection with object oriented way
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);

?>