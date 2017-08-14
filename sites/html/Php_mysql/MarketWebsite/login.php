<html>
<?php include 'head.html';?>
<body>
		
<div id="wrapper">

<!-- Sidebar -->
		<?php include 'sidePanel/menu.html';?>
<!-- /#sidebar-wrapper -->

<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
		<?php include 'button/buttonMenuCp.html';?>
			<div
<?php
	require 'backend/connect.php';
	$conn    = Connect();
	
if (isset($_POST['email'])) {
	$email    = $conn->real_escape_string($_POST['email']);
}
if (isset($_POST['password'])) {	
	$password    = $conn->real_escape_string($_POST['password']);
}

$query   = "
SELECT `user`.`last_name`,`user`.`first_name`,`user`.`email`, `user`.`password`, `products`.`products`, `products`.`price`, `products`.`id`
FROM `user`
 LEFT JOIN `Database_manufacturer`.`products` ON `user`.`id` = `products`.`id_user` 
WHERE ((`user`.`email` ='$email') AND (`user`.`password` ='$password'))";

	$success = $conn->query($query);
	
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

	$result = $conn->query($query);

?>

<h3 class="text-center">Control Panel</h3>
<p><b><?php echo $first_name ?></b></p>


<table class="table table-striped table-inverse">                     
    <div class="table responsive">
        <thead>
            <tr>
              <th>ID</th>
              <th>Products</th>
              <th>Price</th>
            </tr>
        </thead>
    <tbody>

<?php 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo '<tr>
                  <td scope="row">' . $row["id"]. '</td>
                  <td>' . $row["products"] .'</td>
                  <td> '.$row["price"] .'</td>
                </tr>';
    }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
	</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
	<script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>