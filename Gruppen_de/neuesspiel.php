<?php
 
$db_connection = mysqli_connect(„localhost“, „root");

?>
<form>
  <fieldset>
    <label for="newplayer">Neuer Spieler:</label> 
    <input type="text" id="newplayer" size="30" maxlength="30" value="Name"> <br>
   
    <label for="spieler"> Spieler</label><br> <br>
    <input type="checkbox" id="spieler" name="Gegnertyp" value="spieler">
   
    <label for="ki"> KI-Gegner</label><br> <br>
    <input type="checkbox" id="ki" name="Gegnertyp" value="ki">
   
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

mysqli_close($db_connection);
