<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>
<h3> Contact US</h3>
<form action="funcInsert.php" method="post">
  Name:<br>
  <input type="text" name="name" ></br>
 
  Age:<br>
  <input type="number" name="age" ></br>
 
Height:<br>
  <input type="number" step="0.01" name="height" ></br>
 
Weight:<br>
  <input type="number" step="0.01" name="weight" ></br>
  
<br>
<input type="submit" value="Submit"></br>
</form>
</body>
</html>