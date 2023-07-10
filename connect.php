<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'pdff';

$conn = new mysqli($servername, $username, $password, $db_name);

if(!$conn){
    die(mysqli_errno($conn));
}

?>