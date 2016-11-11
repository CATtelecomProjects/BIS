<?
session_start();


$desc1 = substr($_SESSION['desc'],0,strpos($_SESSION['desc']," "));
$desc2 = substr($_SESSION['desc'],strpos($_SESSION['desc']," "),strlen($_SESSION['desc']));

?>
<HTML>
<HEAD>
<script language="JavaScript"> 
	function go_eis()
	{
		eis.submit();
	}
</script> 
</HEAD>
<BODY onload = "go_eis()">
<FORM name = 'eis' method="POST"  action="/cgi-bin/oowaro/ExpSrv634/DBxwdevkit/xwd_init?WEBEIS/xwd_apppg.create/xs_toppage">
<input type=hidden     name=OOWA_USER    value= oesdba>
<input type=hidden name=OOWA_PASSWORD value = oesdba>
<input type=hidden     name="OOWA_DOMAIN"   value="">
<INPUT TYPE="hidden" name = "_users"  value = "<? echo $_SESSION['usr']?>">
<INPUT TYPE="hidden" name = "_user_desc1"  value = "<? echo $desc1?>">
<INPUT TYPE="hidden" name = "_user_desc2"  value = "<? echo $desc2?>">

</FORM>
</BODY>
</HTML>
