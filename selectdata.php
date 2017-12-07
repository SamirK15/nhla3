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
