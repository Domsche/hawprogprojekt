<?php
 
$db_connection = mysqli_connect(„localhost“, „root“, „“ , „startgame“);

?>
<form>
  <fieldset>
 <label for="newplayer">Neuer Spieler:</label> 
 <input type="text" id="newplayer" size="30" maxlength="30" value="Name"> <br>
    <input type="enemytype" id="spieler" name="Gegnertyp" value="spieler">
    <label for="spieler"> Spieler</label><br> <br>
    <input type="enemytype" id="ki" name="Gegnertyp" value="ki">
    <label for="ki"> KI-Gegner</label><br> <br>
 </fieldset>
</form>
   <!-- Das Formular soll später ein neues Eingabefeld erzeugen -->
     
     <form>
    <input type="radio" name="difficulty" value="easy" checked>Leicht<br><!-- Dieser Radio-Button ist später nur anwählbar wenn man KIPlayer gewählt hat -->
    <input type="radio" name="difficulty" value="hard">Schwer<br>
     </form>
     
  <form action=playingsurface.php>
  	<button>Spiel Starten</button>				
  </form>

