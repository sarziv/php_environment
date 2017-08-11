<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 300px;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<div>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','root','Movie_database','8082');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");

$sql=
"SELECT `List`.`id_genre`, `List`.`name`,`List`.`year`
FROM `List`
WHERE (`List`.`id_genre` ='".$q."')";


$result = mysqli_query($con,$sql);

echo 
"<table>
<tr>
<th>name</th>
<th>year</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</div>
</body>
</html>