<?
session_start();

include("conora.php");

$mlevel = $_SESSION['mlevel'];
$mlevels = $_SESSION['mlevel'];
$orgcode = $_SESSION['org'];

$query = "select  org_area from morg_area where org_code = '$orgcode'" ;
$stmt = ociparse($db_conn,$query);
ociexecute($stmt);
ocifetch($stmt);

$area = OCIResult($stmt,1);
$_SESSION['area'] = $area;
?>
<HTML>
<HEAD>
<script language="JavaScript"> 
	function go_stat()
	{
		statregion.submit();
//		tmp="../program/fmain.php?_mlevel="		
	}
</script> 
</HEAD>
<BODY onload = "go_stat()">
<FORM name = 'statregion' method="POST"  action="../program/fmain.php">
<INPUT TYPE="hidden" name = "_mlevel"  value = "<? echo $mlevel?>">
<INPUT TYPE="hidden" name = "_mlevels"  value = "<? echo $mlevels?>">
<INPUT TYPE="hidden" name = "_org"  value = "<? echo $orgcode?>">
<INPUT TYPE="hidden" name = "_area"  value = "<? echo $area?>">

</FORM>
</BODY>
</HTML>

