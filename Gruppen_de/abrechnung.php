<?php
$db_connection = mysqli_connect(„localhost“, „root“);
$query = "SELECT $bankSiegpunkte FROM highscore;
$array_playerscore = mysql_fetch_array($query);
arsort($array_playerscore);
    echo  "{$array_playerscore[0]} hat das Spiel gewonnen!";

<!-- Generierung der Highscore-Tabelle mit Datenbank query -->
function highscoretable()
{
  echo "
<table>
 <tr>
   <td>Rang</td>
   <td>Punkte</td>
   <td>Name</td>
   <td>Profil</td>
 </tr>";
$query = "SELECT id,punkte,name FROM highscore ORDER BY punkte DESC LIMIT 0,10"; 
$rang = 0;
while ($row = mysql_fetch_array($query)) {
  $rang++;
  echo "
 <tr>
   <td>".$rang."</td>
   <td>".$row['punkte']."</td>
   <td>".$row['name']."</td>
   <td><a href=\"profil.php?id=".$row['id']."\">Profil</a></td>
 </tr>";
}
echo "</table>";
}

highscoretable();
?>
mysqli_close($db_connection); 

<!-- Buttons zur Weiterführung in ein neues Spiel oder ins Menü -->	
<form action=startinggame.php>		
	<button>Neues Spiel?</button>			
</form>

<form action=mainmenu.php>		
	<button>Zum Menü</button>			
</form>

