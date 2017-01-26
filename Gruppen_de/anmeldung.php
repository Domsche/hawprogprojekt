<?
$db_server = 'xxx';
$db_name = 'nutzer';
$db_user = 'xxx';
$db_passwort = 'xxx';
@mysql_connect($db_server,$db_user,$db_passwort);
mysql_select_db($db_name);

       
if(!isset($_POST['sub1']) || empty($_POST['sub1']))
{
 print('<form action="" method="post">
        Name: <input type="text" name="nachname"><br>
        Vorname: <input type="text" name="vorname"><br>
        E-Mail: <input type="text" name="email"><br>
        Loginname: <input type="text" name="kennung"><br>
        Paßwort: <input type="password" name="passwort"><br><br>
        <input type="submit" name="sub1" value="LOGIN">
        </form>');
}
else if($_POST['sub1'] == 'LOGIN')
{
 $check = mysql_db_query('nutzer','SELECT user FROM teilnehmer
                                   WHERE user="'.$_ POST['kennung'].'"');
 $anzeige = mysql_fetch_row($check);
 if($anzeige[0] == $_ POST['kennung'])
 {
  print('<script language="Javascript">
          alert("Die eingegebene Kennung ist bereits vorhanden");
         </script>');
 }
 else
 {
  if(!empty($_POST['passwort']) && !empty($_POST['login']))
  {
   print('<script language="Javascript">
           alert("Ihre Daten wurden übernommen");
          </script>');
   $pers = mysql_db_query("nutzer",'INSERT INTO teilnehmer
           (user, nachname, vorname, email) VALUES
           ("'.$_POST['kennung'].'","'.$_POST['$nachname'].'","'.
               $_POST['$vorname'].'","'.$_POST['$email'].'")');
   $login = mysql_db_query("nutzer",'INSERT INTO login
           (username, passwort, registrierung) VALUES
           ("'.$_POST['kennung'].'","'.$_POST['passwort'].'",NOW())');
   }
   else
   {
    print('<script language="Javascript">
           alert("Ihre Daten konnten nicht übernommen werden");
          </script>');
   }
  }
 }
}
?>