<?php

   $dbhost = 'localhost:8082';
   $dbuser = 'root';
   $dbpass = 'root';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT id, name, age, height, weight FROM Human';
   mysql_select_db('Display_records');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "ID : {$row['id']}  <br> ".
         "NAME : {$row['name']} <br> ".
         "AGE : {$row['age']} <br> ".
		 "HEIGHT : {$row['height']}  <br> ".
		 "WIGHT : {$row['weight']}  <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>