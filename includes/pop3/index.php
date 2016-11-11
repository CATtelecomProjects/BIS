<?
require("popAuth.inc.php");
?>
<HTML>
<HEAD>
</HEAD>
<BODY>
<pre>
<?

if($_POST["btCheck"] == "Verify")
{
 $user = $_POST["user"];
 $pass = $_POST["pass"];
 $server = $_POST["server"];

 $pop3 = new POPAuth($user,$pass,$server);
  echo "The passord is ";
	$rs =   $pop3->validate();
  if($rs)
  {
   echo " Correct.<br>";
  }
  else
  {
  echo " Incorrect.<br>";
  }
 }
else
{
?>
<h2>POP3 Information</h2>
<form action="" method="post">
Username:  <input type="text" name="user">
Password:  <input type="password" name="pass">
Server:    <input type="text" name="server">
<input type="submit" name="btCheck" value="Verify">
</form>
<?
}
  
?>
</pre>
</BODY>
</HTML>
