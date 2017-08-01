<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'Display_records';
$port = '8082';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Human (id, name, age, height, weight)
VALUES ('','Maty', '77', '93.7','44')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>