<?php
$dbhost = "dbserver";
$dbuser= "skazi9";
$dbpass = "7haEgXCzqY";
$dbname = "skazi9assign2db";
$connection = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");
echo "<p>attempting to connect</p>";
if (!$connection) {
     echo "Database Connection Failed" ;
   }
?>
