<?php
$host='localhost';
$user='root';
$pass='';
$database='quora';


$conn = mysqli_connect($host, $user, $pass) or die("cannot connect to database"); 
mysqli_select_db($conn, $database) or die("cannot select DB");
?>