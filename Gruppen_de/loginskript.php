<?
$db_server = "xxx";
$db_name = "nutzer";
$db_user = "xxx";
$db_passwort = "xxx";
@mysql_connect($db_server,$db_user,$db_passwort);
mysql_select_db($db_name);

       
$user = '';
$pass = '';
if(isset($_COOKIE['username'])){$user = $_COOKIE['username'];}
if(isset($_COOKIE['passwort'])){$pass = $_COOKIE['passwort'];}
if(isset($_POST['username'])){$user = $_POST['username'];}
if(isset($_POST['passwort'])){$pass = $_POST['passwort'];}

       
if($user != '')
{
 $pruefung = mysql_db_query("nutzer",'SELECT passwort FROM login
             WHERE username="'.$user.'"');
 $ausgabe = mysql_fetch_row($pruefung);
 if($pass != $ausgabe[0])
 {
  echo '<p>Username und Passwort stimmen nicht überein.</p>';
  $user = '';
 }
 else
 {
  setcookie("username", $user, time()+3600);
  setcookie("passwort", $pass, time()+3600);
 }
}
if($user = '')
{
 print('<form action="login.php" method="post">
         Login: <input type="text" name="username"><br>
         Passwort: <input type="password" name="passwort"><br><br>
         <input type="submit" name="sub1" value="LOGIN">
        </form>');
 exit;
}
?>