<?php
$dbhost = "dbserver";
$dbuser= "skazi9";
$dbpass = "8fsMbEpd7n";
$dbname = "skazi9assign2db";
$connection = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");

if (!$connection) {
     echo "Database Connection Failed" ;
   }

?>
