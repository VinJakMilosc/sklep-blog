<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nieallegro";

$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("połączenie nieudane" . $conn->connect_error);
 }
 
?>