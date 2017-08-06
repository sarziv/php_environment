<?php include("Basic_menu.php"); ?>
 <div class="container"style="margin-left:50px"> 
<?php include("delete_form.php"); ?>
<?php

require 'connect.php';
$conn    = Connect();
$id    = $conn->real_escape_string($_POST['id']);
$query   = "DELETE FROM Human WHERE id = '$id'";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

echo "ID Deleted -> $id "
?>
</div>