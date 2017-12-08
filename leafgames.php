<?php
include "mapleleaf.php";
include "connectdb.php";

$query = "SELECT * FROM teams INNER JOIN plays on team_id = t_id WHERE g_id IN
(SELECT g_id FROM plays INNER JOIN teams ON team_id = t_id WHERE name = 'Maple Leafs')
ORDER BY g_id;";

//print the first row of the table
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
//these variables store info about the leafs
$scoreLeaf;
$previousGame;
while($row = pg_fetch_row($result)){
  if ($row[0] == "12"){  //if id belongs to the leafs then we store them in the variables
    $scoreLeaf = $row[4];
    $previousGame = $row[5];
    continue;
  }
  else {
    //if the data belongs to teams that are not leafs then we display it with the leafs score
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
echo "</table> </body> </html";
pg_close($connection);
?>
