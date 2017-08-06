<?php

   $dbhost = 'localhost:8082';
   $dbuser = 'root';
   $dbpass = 'root';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT `Head`.`name`, `Ear`.`left_Ear`, `Ear`.`light_Ear`, `color`.`color`\n"
    . "FROM `Head`\n"
    . " INNER JOIN `HumanBody`.`Ear` ON `Head`.`id` = `Ear`.`id_Head` \n"
    . " INNER JOIN `HumanBody`.`color` ON `Ear`.`color_id` = `color`.`id` \n"
    . " LIMIT 0, 30 ";
   mysql_select_db('HumanBody');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Name : {$row['name']}  <br> ".
         "L_ear : {$row['left_Ear']} <br> ".
         "R_ear : {$row['light_Ear']} <br> ".
		 "Color: {$row['color']}  <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>