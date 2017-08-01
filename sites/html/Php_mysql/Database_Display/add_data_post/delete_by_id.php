<a href="Run it.php">Add_content</a></br>
<br>
<a href="display_records.php">Display_records</a> </br>
<br>

<?php include("delete_form.php"); ?>
<?php
$id =$_POST['id'];

$con = mysql_connect("localhost","root","root","8082");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("Display_records", $con);


// sending query
mysql_query("DELETE FROM Human WHERE id = '$id'")
or die(mysql_error());      

echo "ID Deleted -> $id "

?>
