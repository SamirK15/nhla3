<?php include 'connectdb.php';
if (isset($_POST['delete'])){
  $delete_entry = $_POST['teamID'];
  $id = (string)$delete_entry;
  $sql = "DELETE FROM teams WHERE team_id ='" .$id."'";
  $result = pg_query($sql);
  if (!$result){
    $errormessage = pg_last_error();
    echo "Error with deletion: " . $errormessage;
    exit();
    }
}
?>
<script type="text/javascript">
var c = <?php echo $sql; ?>;
alert(c);
</script>
