<?php
$playeramount[] = 0 <!--Startwert ist 0, pro Spieler +1  -->
$playerName[] = "KI-Gegner"  <!-- In diesem Array sollen Spielernamen gespeichert/übergeben werden, KI-Gegner bei keiner Namensangabe -->
  
$bankDatteln[] = 3      <!-- Das Array soll die Lagerbestände der einzelnen Spieler speichern, 3 ist Startwert -->
$bankPfeffer[] = 3
$bankSalz[] = 3
$bankDatteln[] = 3
  
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
  echo "$playerName[i]"                                 <!-- Grundgerüst 3x5 für Gebäudekarten. Zellen werden in Typfarbe später eingefärbt -->
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
 <!-- Elemente 66-67 Folgen! -->
  
