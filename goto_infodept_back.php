<?
session_start();

include("conora.php");

$level = $_SESSION['level'];
$userid = $_SESSION['userid'];
$username = $_SESSION['usr'];

/*$query = "select  org_area from morg_area where org_code = '$orgcode'" ;
$stmt = ociparse($db_conn,$query);
ociexecute($stmt);
ocifetch($stmt);

$area = OCIResult($stmt,1);
$_SESSION['area'] = $area;*/
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
<FORM name = 'infodept' method="POST"  action="http://infodept.cattelecom.com/check_login.php">
<INPUT TYPE="hidden" name = "ilevel"  value = "<? echo $level?>">
<INPUT TYPE="hidden" name = "userid"  value = "<? echo $userid?>">
<INPUT TYPE="hidden" name = "username"  value = "<? echo $username?>">
<INPUT TYPE="hidden" name = "_area"  value = "<? echo $area?>">

</FORM>
</BODY>
</HTML>

