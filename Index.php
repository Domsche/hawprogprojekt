<?php
session_start();
require_once 'dbconnect.php';		//ruft einmalig dbconnect.php auf

if (isset($_SESSION['userSession'])!="") {	//sollte man bereits eingeloggt sein, wird man zur home.php weitergeleitet
 header("Location: home.php");
 exit;
}

if (isset($_POST['btn-login'])) {			//wird der Login Button gedrückt startet die Email/Passwort Abfrage.
 
 $email = strip_tags($_POST['email']);
 $password = strip_tags($_POST['password']);
 
 $email = $DBcon->real_escape_string($email);
 $password = $DBcon->real_escape_string($password);
 
 $query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");		//Laden von user_id, email und passwort in die Query
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // Bei korrekter Email ist die Anzahl der Reihen 1
 
 if (password_verify($password, $row['password']) && $count==1) { // Passwort abgleich
  $_SESSION['userSession'] = $row['user_id'];
  header("Location: home.php");
 } else {
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Falscher Login oder Passwort !
    </div>";
 }
 $DBcon->close();
}
?>
<!DOCTYPE html>
<body>
<link rel="stylesheet" href="styles.css">

<div class="signin-form">

 <div class="container">
     
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Einloggen</h2><hr />
        
        <?php
  if(isset($msg)){
   echo $msg;
  }
  ?>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Passwort" name="password" required />
        </div>
       
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
      <span class="glyphicon glyphicon-log-in"></span> Einloggen
   </button> 
<br>
<input type="button" onclick="location.href='register.php';" value="Registrieren" />
          
            
        </div>  
        
        
      
      </form>

    </div>
    
</div>

</body>
</html>