<?
session_start();

//include("conora.php");

$level = $_SESSION['level'];
$userid = $_SESSION['userid'];
$username = $_SESSION['usr'];
$home_pg = "index2.php";

?>
<HTML>
<HEAD>
<script language="JavaScript"> 
	function go_infodept()
	{
		infodept.submit();
//		tmp="../program/fmain.php?_mlevel="		
	}
</script> 
</HEAD>
<BODY onload = "go_infodept()">
<FORM name = 'infodept' method="POST"  action="../infodept/index2.php">
<INPUT TYPE="hidden" name = "level"  value = "<? echo $level?>">
<INPUT TYPE="hidden" name = "userid"  value = "<? echo $userid?>">
<INPUT TYPE="hidden" name = "username"  value = "<? echo $username?>">


</FORM>
</BODY>
</HTML>

