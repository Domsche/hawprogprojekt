<?php
session_start();

if (!isset($_SESSION['userSession'])) { //Sollte Session nicht gesetzt sein, wird man zum Login zurück geschickt
 header("Location: index.php");
} else if (isset($_SESSION['userSession'])!="") { 
 header("Location: home.php");
}

if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['userSession']);
 header("Location: index.php");
}
?>