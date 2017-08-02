<?php include("Basic_menu.php"); ?>

 <div class="container"style="margin-left:50px"> 
<?php include("form_search.php"); ?>


<?php

	require 'connect.php';
	
	$conn    = Connect();
	$name    = $conn->real_escape_string($_POST['name']);
	$query   = "SELECT id,name FROM Human WHERE name = '$name'";
	$success = $conn->query($query);
	
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

	$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
		"id: " . $row["id"]. "<br>".
		"Name: " . $row["name"]. "<br>".
		"---------------------------------" . "<br>";
    }
} else {
    echo "0 results<br>";
}

   echo "Fetched data successfully\n";
   $conn->close();
   
?>
 </div>