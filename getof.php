<?php
include 'connectdb.php';

$query='SELECT * FROM officials ORDER BY lname';

$result = pg_query($query);
if (!$result) {
   die ("Database query failed!");
}
echo "<table>
<tr>
<th> ID </th>
<th> First Name </th>
<th> Last Name </th>
<th> City </th>
</tr>";

while ($row = pg_fetch_row($result)) {
   echo "<tr> <th>".$row[0]. "</th>
   <th>" .$row[1]. "</th>
   <th>" .$row[2]. "</th>
   <th>" .$row[3]. "</th>
   </tr>";
}
echo "</table>";
pg_close($connection);
?>
