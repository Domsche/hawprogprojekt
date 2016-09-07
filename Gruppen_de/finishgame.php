<?php>

$player1score = //wird von anderer Gruppe übergeben (oder Datenbank)
$player2score = //s. player1

if($player1score > $player2score) 
{ echo "Spieler 1 hat gewonnen!"
}
else 
{ echo "Spieler 2 hat gewonnen!"

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

<form>
<input class="NewGame" type="button" value="Neues Spiel?" onclick="StartinGgame.php" /> //Hier wusste ich nicht wie der Pfad exakt aussehen muss am Ende
</form>

<form>
<input class="NewGame" type="button" value="Schließen" onclick="MainMenu.php" /> 

<php>
