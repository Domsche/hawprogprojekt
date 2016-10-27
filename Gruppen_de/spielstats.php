<?php
  $playeramount[] = 0;<!--Startwert ist 0, pro Spieler +1  -->
  $playerName[] = "KI-Gegner"; <!-- In diesem Array sollen Spielernamen gespeichert/übergeben werden, KI-Gegner bei keiner Namensangabe -->
  
  $bankDatteln[] = 3;    <!-- Das Array soll die Lagerbestände der einzelnen Spieler speichern, 3 ist Startwert -->
  $bankPfeffer[] = 3;
  $bankSalz[] = 3;
  $bankDatteln[] = 3;
  $bankSiegpunkte[] = 3
  
    
    <!-- Ausgabe der Waren des Spielers -->
  <table>
 <tr>
   <th>Spieler</th>
   <th>Datteln</th>
   <th>Salz</th>
   <th>Pfeffer</th>
   <th>Siegpunkte</th>
 </tr>;
foreach  ($i = 0; $i < $playeramount; $i++) {    <!-- Schleife zum auslesen der Variablen / Befüllung der Zeilen -->
    echo <tr>
      <td>$playerName[i]</td>
      <td>$bankDatteln[i]</td>
      <td>$bankSalz[i]</td>
      <td>$bankPfeffer[i]</td>
      <td>$bankSiegpunkte[i]</td>
</table>

for ($i = 0; $i < $playeramount; $i++) {
  echo "$playerName[i]";                                 <!-- Grundgerüst 3x5 für Gebäudekarten. Zellen werden in Typfarbe später eingefärbt -->
  <table>
    <tr>
      <td></td>
      <td></td>
      <td></td>
     </tr>
     <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>    
    
  </table>
 ?>

<!-- Hier folgt der Spiellog/Chat eingabe -->
$actionmessage[]; <!-- wird aus Datenbank übergeben -->
$chatmessage[];
<form>
	<label for=chat>Message:</label>
	<input type=textarea name=chatmessage id=chat>
  	<input type="submit" value="Submit">Abschicken<br>
</form>
<?php
   <!-- Hier würde würde eine Php-Funktion das chatmessage array über eine echo-Schleife ausgeben, hierfür benötige ich nach Recherche ajax.php (wegen serverseitig / clientseitiger Buttonclick).
     Muss ich mich noch in dieses Thema einarbeiten oder genügt die Beschreibung vorerst? -->
  
