<?php
include "mapleleaf.php";
include "connectdb.php";

$query = "SELECT fname, lname, COUNT(officiates.g_id) AS gameCount FROM officials INNER JOIN officiates ON official_id = officiates.o_id INNER JOIN plays ON officiates.g_id = plays.g_id INNER JOIN teams ON plays.t_id =team_id WHERE name = 'Maple Leafs' GROUP BY fname,lname ORDER BY gameCount DESC;";
$result = pg_query($query);
$row = pg_fetch_row($result);
echo "<h2>Looks like $row[0] $row[1] is the Leaf's biggest stalker with $row[2] games.</h2>";

pg_close($connection);
?>
