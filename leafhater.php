<?php
include "mapleleaf.php";
include "connectdb.php";

$query = "SELECT DISTINCT(lname), fname, COUNT(*) as count  FROM leafscores inner join officiates on game_id = g_id inner join officials on official_id = o_id  where game_id IN (SELECT game_id from leafscores where ((t1_id='12' AND t2score>t1score))
) GROUP BY lname, fname ORDER BY count DESC;";
$result = pg_query($query);
$row = pg_fetch_row($result);
$score = ((int)$row[2])/2;
if(!$row[0]){
  echo "<h2> WOW THE LEAFS HAVNT LOST YET!</h2>";
}
else{
  echo "<h2>Looks like $row[0] $row[1] is the Leaf's biggest hater. $row[0] $row[1] has reffed $score of the leaf's losing games.</h2>";
}
pg_close($connection);
?>
