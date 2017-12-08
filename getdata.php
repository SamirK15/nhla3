<?php
 include 'connectdb.php';


//The table is ordered by team as default
$query='SELECT * FROM teams ORDER BY name';
$team_button = "checked";
$city_button = "unchecked";

//If the user changes the order, they have to press sub
if (isset($_GET['submit'])){
  if(isset($_GET['order'])){
    echo "ORDERED BY :".$_GET['order'];
    if($_GET['order'] == "team"){
        $query ='SELECT * FROM teams ORDER BY name';
        $team_button = "checked";
    }
    if($_GET['order'] == "city"){
      $query ='SELECT * FROM teams ORDER BY city';
      $city_button = "checked";
    }    //  Displaying Selected Value
  }
}

/*
the following lines the echo out the html
in a table format to display the teams
depending on how the query is sent
 */
$result = pg_query($query);
if (!$result) {
   die ("Database query failed!");
}
echo "<table class='table-striped'>
<tr>
<th>Team ID</th>
<th>Team Name</th>
<th> City </th>
</tr>";

while ($row = pg_fetch_row($result)) {
   echo "<tr> <th>".$row[0]. "</th>
   <th>" .$row[1]. "</th>
   <th>" .$row[2]. "</th>
   </tr>";
}
echo "</table>";
pg_close($connection);
?>
