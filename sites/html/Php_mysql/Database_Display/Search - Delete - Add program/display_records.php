<?php include("Basic_menu.php"); ?>


 <div class="container"style="margin-left:50px">
 <p>Human Table on MySQL</p>

<?php

	require 'connect.php';
	$conn    = Connect();
	$query   = 'SELECT id, name, age, height, weight FROM Human';
	$success = $conn->query($query);
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

	$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
		"ID: " . $row["id"]. "<br>".
		"Name: " . $row["name"]. "<br>".
		"Height: " . $row["height"]. "<br>".
		"Weight " . $row["weight"]. "<br>" .
		"---------------------------------" . "<br>";
    }
} else {
    echo "0 results<br>";
}

$conn->close();
   
   echo "Fetched data successfully\n";
   
?>
</div> 