<?php
include 'connectdb.php';

$query='SELECT * FROM teams';

if (isset($_GET['submit'])){
  if(isset($_GET['order'])){
    if($_GET['order'] == "team"){
        echo "You have selected :".$_GET['order'];
        $query .=' ORDER BY name';
    }
    if($_GET['order'] == "city"){
      echo "You have selected :".$_GET['order'];
      $query .=' ORDER BY city';
    }    //  Displaying Selected Value
  }
}
$result = pg_query($query);
if (!$result) {
   die ("Database query failed!");
}
echo "<ul>";
while ($row = pg_fetch_row($result)) {
   echo"<li>";
   echo $row[0]. $row[1]. $row[2]. "</li>";
}

?>
