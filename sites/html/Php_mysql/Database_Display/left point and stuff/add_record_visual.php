<?
if( $_POST )
{
  $con = mysql_connect("localhost","root","root","Display_records","8082");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("Display_records", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['age'];
  $users_website = $_POST['height'];
  $users_comment = $_POST['weight'];

  $users_name = mysql_real_escape_string($users_name);
  $users_age = mysql_real_escape_string($users_age);
  $users_height = mysql_real_escape_string($users_height);
  $users_weight = mysql_real_escape_string($users_website);

  $query = "
  INSERT INTO `Display_records`.`Human` (`name`, `age`, `height`,'weight') 
		VALUES ('$users_name','$users_age', '$users_height', '$users_weight');";

  mysql_query($query);

  echo "<h2>Thank you for your info!</h2>";

  mysql_close($con);
}
?>

