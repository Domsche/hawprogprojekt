<! doctype html>
<html lang=de>
	<head>
		<title>Neues Spiel</title>
		<meta charste=utf-8>
		<link rel=stylesheet href=styles.css>
	</head>
	<body>
	  <main>
	    <header>
	    	<h1>Spiel Starten</h1>
	    	</header>
	    <!-- Noch nicht identisch zu strukt.html -->
        <p>Spielmodus:<br>
        <input type="button" name="playmode" value="KIPlayer" checked>Computer Gegner hinzufügen<br>
        <input type="button" name="playmode" value="extraPlayer">Spieler hinzufügen<br></p>
        <p>
          <input type="radio" name="difficulty" value="easy" checked>Leicht<br><!-- Dieser Radio-Button ist später nur anwählbar wenn man KIPlayer gewählt hat -->
          <input type="radio" name="difficulty" value="hard">Schwer<br>
          </p>
		  <article>
		      <form>
		        <!-- Hier sollen Spieler hinzugefügt werden -->
		      </form>
		      <button type="submit" value="Submit">Submit</button>
		  </article>
		</main>
		
	</body>
</html>
