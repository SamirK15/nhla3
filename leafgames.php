<?php
include "mapleleaf.php";
include "connectdb.php";

$query = "SELECT * FROM teams INNER JOIN plays on team_id = t_id WHERE g_id IN
(SELECT g_id FROM plays INNER JOIN teams ON team_id = t_id WHERE name = 'Maple Leafs')
ORDER BY g_id;";

$result = pg_query($query);
echo "<table>
<tr>
  <th>
    Team Name
  </th>
  <th>
    Team City
  </th>
  <th>
    Team Score
  </th>
  <th>
    Leafs'score
  </th>
</tr>";

$scoreLeaf;
$previousGame;
while($row = pg_fetch_row($result)){
  if ($row[0] == "12"){
    $scoreLeaf = $row[4];
    $previousGame = $row[5];
    continue;
  }
  else {

    echo"<tr>
      <th>
        $row[1]
      </th>
      <th>
        $row[2]
      </th>
      <th>
        $row[4]
      </th>
      <th>
        $previousGame
      </th>
    </tr>";
  }
}
echo "</table>";

?>
