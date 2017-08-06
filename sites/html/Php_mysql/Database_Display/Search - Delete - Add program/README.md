## Synopsis

Simple MySql Test stuff.
#add
#delete by id
#search by id
#view
Added Simple bootstrap nav.

Spited into easy 

## Code Example
#Works by three simple steps.
1.connect(to mysql)
2.display(form)
3.function(gets post from form activates the funtion)
This is not the corrent way to do it. Just some test.

#Connet to Mysql
```
function Connect()
{
 $dbhost = "*";
 $dbuser = "*";
 $dbpass = "*";
 $dbname = "*";
 $port = "*";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname,$port) or die($conn->connect_error);
 
 return $conn;
```
#Form Display

```
<form action="function.php" method="post">
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
```

#Function
```
include("form.php")
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

```

## Motivation

Learning phpmyadmin and stuff.