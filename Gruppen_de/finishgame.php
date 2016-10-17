<?php

session_start();
if(!isset($_SESSION['userid'])) {
die('Bitte zuerst <a href="login.php">einloggen</a>');
}
?>
	
<?php
$array_playerscore <!-- Wird aus Datenbank übergeben -->
arsort($array_playerscore);
    echo  "{$array_playerscore[0]} hat das Spiel gewonnen!"

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

<form>
<input class="NewGame" type="button" value="Neues Spiel?" onclick="StartinGgame.php" /> //Hier wusste ich nicht wie der Pfad exakt aussehen muss am Ende
</form>

<form>
<input class="NewGame" type="button" value="Schließen" onclick="MainMenu.php" /> 

<form action=StartingGame.php>		
	<button>Neues Spiel?</button>			
</form>

<form action=MainMenu.php>		
	<button>Zum Menü</button>			
</form>

