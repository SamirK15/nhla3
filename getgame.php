<?php
include "connectdb.php";

//this conditon runs when the getGame submit button is clicked
if(isset($_GET['getGame'])){
  $qGameID = $_GET['gameID'];
  $teamQuery = "SELECT name, city, score FROM teams INNER JOIN plays on t_id = team_id WHERE g_id = '" .$qGameID."'";
  $teamResult = pg_query($teamQuery);
  $teamNum = pg_num_rows($teamResult); //get the number of rows from the Querying the teams
  $gameQuery = "SELECT * FROM games WHERE game_id = '" .$qGameID."';";
  $gameResult = pg_query($gameQuery);
  $refQuery = "SELECT fname, lname FROM officials INNER JOIN game_officials on official_id = o_id WHERE g_id = '" .$qGameID."'";
  $headRefQuery = "SELECT fname, lname FROM officials INNER JOIN officiates on official_id = o_id WHERE g_id = '" .$qGameID."'";
  $refResult = pg_query($refQuery);
  $headRefResult = pg_query($headRefQuery);
  $headRef = pg_fetch_row($headRefResult); //head ref will only have 1 row, so I fetched it right away


  //this block fetches data from the first team
  $row = pg_fetch_row($teamResult);
  $name1 = $row[0];
  $city1 = $row[1];
  $score1 = $row[2];

  //starts making the html for the display
  include 'head.php';
  echo "<table class='table-striped'>
  <tr>
  <th class='team1'> $name1 </th>
  <th class='team1'> $city1 </th>
  <th class='team1' id='score1'> $score1 </th>";

  //if the row of fetched from the team query is an even number,
  //then it there were 2 teams in the game
  //I have games in my database that only have 1 team so this was neede
  if($teamNum % 2 == 0 && $teamNum > 0){
    while($row = pg_fetch_row($teamResult)){
      if($row[0] == $name1){ //makes sure that the first team isnt the second team, if it is continue to the next iteration
        continue;
      }
      else{
        $name2 = $row[0];     //get the data for team2
        $city2 = $row[1];
        $score2 = $row[2];
        //print out the data for team2
        echo "
        <th class='team2'> $name2 </th>
        <th class='team2'> $city2 </th>
        <th class='team2' id='score2'> $score2 </th>";
        break;
      }
    }
  }
}
  //get the game info and print it out
  $gameRow = pg_fetch_row($gameResult);
  echo  "<th> $gameRow[2] </th>
      <th> $gameRow[1] </th>";

  //get the ref info and print it out, check the headref by
  //the if statemnt
  while($refRow = pg_fetch_row($refResult)){
    if($refRow[0] == $headRef[0] && $refRow[1] == $headRef[1]){
      echo "<th>
      <strong id='head'> $refRow[0] $refRow[1] </strong>
      </th>";
    }
    //if the ref isnt the head ref, dont it an id tag
    else{
      echo
      "<th> $refRow[0] $refRow[1] </th>";
    }
  }
  //closing all of my tags for that good and valid html
  echo "</tr> </table> </body> </html>";
  pg_close($connection);

/*html comments dont work for me in the script tag
so im commenting here. the script runs javascript code that highlights winning teams
if 2 teams play and highlights the head ref's name
*/

?>

<script type="text/javascript">
var headRef = document.getElementById("head");
headRef.style.color = 'purple';
var score1 = document.getElementById("score1");
var score2 = document.getElementById("score2");
var winner;
if(score1 && score2){
  if(score1.innerText > score2.innerText){
    winner = document.getElementsByClassName("team1");
  }
  else{
    winner = document.getElementsByClassName("team2");
  }
  for(var i = 0; i < winner.length; i++){
    winner[i].style.color = 'green';
  }
}
</script>
