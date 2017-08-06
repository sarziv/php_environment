<?php include("Basic_menu.php"); ?>
 <div class="container"style="margin-left:50px"> 
<?php include("form.php"); ?>
<?php
 
require 'connect.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$age   = $conn->real_escape_string($_POST['age']);
$height    = $conn->real_escape_string($_POST['height']);
$weight = $conn->real_escape_string($_POST['weight']);
$query   = "INSERT into Human (name,age,height,weight) VALUES('" . $name . "','" . $age . "','" . $height . "','" . $weight . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
  $conn->close();
echo "Thank You For Contacting Us <br>";
 

?>
 </div> 