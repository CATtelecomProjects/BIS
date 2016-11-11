<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
?>
<HTML>
<HEAD>
<script language="JavaScript"> 
	function go_tris()
	{
		tris.submit();
	}
</script> 
</HEAD>
<BODY onload = "go_tris()">
<FORM name = 'tris' method="POST"  action="../tris/index.php">
<INPUT TYPE="hidden" name = "_user_desc"  value = "<? echo $desc;?>">
</FORM>
</BODY>
</HTML>
