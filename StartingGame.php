<! doctype html>
<html lang=de>
	<head>
		<title>Neues Spiel</title>
		<meta charste=utf-8>
	</head>
	<body>
	  <img src="Images/background.jpg"> <!-- Wird Targilogo-Hintergrund-->
	  <main>
	    <header>Spiel Starten</header>
	    
        <p>Spielmodus:<br>
        <input type="radio" name="playmode" value="KIPlayer" checked>Computer Gegner<br>
        <input type="radio" name="playmode" value="2Player">Zwei Spieler<br></p>
        <p>
          <input type="radio" name="difficulty" value="easy" checked>Leicht<br><!-- Dieser Radio-Button ist später nur anwählbar wenn man KIPlayer gewählt hat -->
          <input type="radio" name="difficulty" value="hard">Schwer<br>
          </p>
		  <article>
		      <form>
		        <!-- Hier kann der zweite Spieler seinen Namen eingeben, sofern vorher 2 Spieler gewählt wurde -->
		      </form>
		      <button type="submit" value="Submit">Submit</button>
		  </article>
		</main>
		
	</body>
</html>