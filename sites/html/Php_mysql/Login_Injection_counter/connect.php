<?php
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $dbname = "Login_database";
 $port = "8082";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname,$port) or die($conn->connect_error);
 
 return $conn;
}
 
?>