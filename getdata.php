<?php


$query='SELECT * FROM teams ORDER BY name';

if (isset($_GET['submit'])){
  if(isset($_GET['order'])){
    if($_GET['order'] == "team"{
        echo "You have selected :".$_GET['order'];
        $query .='SELECT * FROM teams ORDER BY name';
        $init = 0;
    }
    if($_GET['order'] == "city"){
      echo "You have selected :".$_GET['order'];
      $query ='SELECT * FROM teams ORDER BY city';
    }    //  Displaying Selected Value
  }
}
$result = pg_query($query);
if (!$result) {
   die ("Database query failed!");
}
echo "<table>";
echo "<tr>";
echo "<th>";
echo "Team ID</th>";
echo "<th>";
echo "Team Name</th>";
echo "<th>";
echo "City</th>";
echo "</tr>";

while ($row = pg_fetch_row($result)) {
   echo "<tr>";
   echo "<th>";
   echo "$row[0] </th>";
   echo "<th>";
   echo "$row[1] </th>";
   echo "<th>";
   echo "$row[2] </th>";
   echo "</tr>";
}
echo "</table>";
?>
