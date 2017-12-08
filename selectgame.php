<?php include 'connectdb.php';
/*
this is like selectdata but its for gameID and city
 */
$query ='SELECT game_id, host_city FROM games ORDER BY game_id';
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
var gameAndCity = <?php echo json_encode($a, JSON_PRETTY_PRINT); ?>;
var list = document.getElementById("gameIdList");
for (var i = 0; i < gameAndCity.length; i++){
  var option = document.createElement("OPTION");
  option.value = gameAndCity[i].id;
  option.text = gameAndCity[i].id + " " + gameAndCity[i].name;
  list.add(option);
}
</script>
