<?php

	require 'connect.php';
	
	$conn    = Connect();
if (isset($_POST['username'])) {
	$username    = $conn->real_escape_string($_POST['username']);
}
if (isset($_POST['password'])) {	
	$password    = $conn->real_escape_string($_POST['password']);
}	
	$query   = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
	
	$success = $conn->query($query);
	
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

	$result = $conn->query($query);

?>
<table border="1" cellpadding="5" cellspacing="0" margin-bottom="10px">
<tr style="text-align: left;">
	 <th style="width: 100px;">Loged-user: </th>
	 <th style="width: 100px;"><?php echo $username; ?></th>
	 </tr>
</table>

<p><b>Results:</b></p>


<table border="1" cellpadding="5" cellspacing="0">
    <tr style="text-align: left;">
        <th style="width: 100px;">ID</th>
        <th style="width: 150px;">Username</th>
        <th style="width: 150px;">Password</th>
        <th style="width: 200px;">Secrets</th>
    </tr>

    <?php
    
    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $name = htmlentities($row->username, ENT_QUOTES, "UTF-8");
        $password = htmlentities($row->password, ENT_QUOTES, "UTF-8");
        $secrets = htmlentities($row->secrets, ENT_QUOTES, "UTF-8");
    ?>

    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $username; ?></td>
        <td><?php echo $password; ?></td>
        <td><?php echo $secrets; ?></td>
    </tr>
    </table>
    <?php
    
    }
	?>

