<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) { //Sollte Session nicht gesetzt sein, wird man zum Login zurück geschickt
 header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']); // Daten des Nutzers werden an die Query übergeben
$userRow=$query->fetch_array();
$DBcon->close();					//Datenbank-Verbindung wird geschlossen

?>
<!DOCTYPE html>
<head>
<meta charset=utf-8" />
<title>Willkommen - <?php echo $userRow['email']; ?></title>
</head>
<body>
<link rel="stylesheet" href="styles.css">
<nav class="navbar navbar-default navbar-fixed-top">

        <div id="navbar" class="navbar-collapse collapse">			<!-- Navigationsleiste -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

   <main>
    <header>
    <h1>Mainmenu</h1>
    </header>
    <?php include("Gruppen_de/hauptmenu.php") ?>			<!-- Einbindung von Hauptmenü.php -->
    
    		<footer>
    		<?php include("Gruppen_de/regeln.php") ?>		<!-- Einbindung von Regeln.php -->
	    	</footer>
    
   </main>
 </body>
</html>


</body>
</html>