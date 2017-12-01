<?php
  $query='SELECT * FROM teams';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
  echo "<ol>";
  while ($row = pg_fetch_row($result)) {
     echo"<li>";
     echo $row[0]. $row[1]. $row[2]. "</li>";
  }
  echo "</ol>";
  pg_free_result($result);
?>
