<?php
include "mapleleaf.php";
include "connectdb.php";

$query = "SELECT DISTINCT(lname), fname, COUNT(*) as count  FROM leafscores inner join officiates on game_id = g_id inner join officials on official_id = o_id  where game_id IN (SELECT game_id from leafscores where ((t1_id='12' AND t2score<t1score))
) GROUP BY lname, fname ORDER BY count DESC;";
$result = pg_query($query);
$row = pg_fetch_row($result);
$score = ((int)$row[2])/2;
echo "<h2>Looks like $row[1] $row[0] is the Leaf's biggest lover. $row[1] $row[0] has reffed of the leaf's $score losing games.</h2>";

pg_close($connection);
?>
