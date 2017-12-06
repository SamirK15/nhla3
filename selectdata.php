<?php include 'connectdb.php';

$query ='SELECT team_id, name FROM teams ORDER BY team_id';
$result = pg_query($query);
if (!$result) {
   die ("Database query failed!");
}
$a = array();
while ($row = pg_fetch_row($result)){
  array_push($a,array('id'=>$row[0], 'name'=>$row[1]));
}
pg_close($connection);
?>

<script type="text/javascript">
var deleteID = <?php echo json_encode($a, JSON_PRETTY_PRINT); ?>;
var list = document.getElementById("idList");
for (var i = 0; i < deleteID.length; i++){
  var option = document.createElement("OPTION");
  option.value = deleteID[i].id;
  option.text = deleteID[i].id + " " + deleteID[i].name;
  list.add(option);
}
</script>


8fsMbEpd7n

CREATE TABLE Plays (t_id CHAR(2), score INT NOT NULL,g_id CHAR(2),FOREIGN KEY (t_id) REFERENCES Teams(team_id) ON DELETE CAS,FOREIGN KEY (g_id) REFERENCES Games(game_id) ON DELETE CASCADE, PRIMARY KEY (t_id,g_id));
