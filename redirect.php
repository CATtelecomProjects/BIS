<?

	session_start();	

	#############################################
	#
	#            Set User name to access to Web OLAP
	#
	#############################################
	
	if($_SESSION['usr']=='jumjy'){
		$user = base64_decode('c3RyYXRlZ3kwMw==');
		$pass = base64_decode('c3RyYXRlZ3kwMw==');
    	}else if($_SESSION['usr']=='dhammarat.w'){
		$user = base64_decode('c3RyYXRlZ3kwMg==');
		$pass = base64_decode('bTE3aTAzbTQ2');
	}else if($_SESSION['usr']=='kamhaeng.k'){
		$user = base64_decode('c3RyYXRlZ3kwNA==');
		$pass = base64_decode('ZHdkdzk5ODg=');

	}else{
		$user = base64_decode('c3RyYXRlZ3kwNA==');
		$pass = base64_decode('ZHdkdzk5ODg=');
	}
	
	/*}else{
		echo "<script language='javascript'>";
		echo "alert('แจ้งเตือน!!\\n===========================\\nไม่อนุญาติให้เข้าใช้งานในส่วนดังกล่าวได้\\n===========================');";
		echo "history.go(-1);";
		echo "</script>";
	}*/
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Redirect.....</TITLE>
</HEAD>

<BODY onLoad="document.redirect.submit()">
<FORM METHOD=POST name="redirect" ACTION="http://10.50.10.57/cgi-bin/webolap/bin/iagw.exe">
<input type=hidden name="method" value ="ia_select.pl">
<input type=hidden name="fido" value ="clean">
<INPUT TYPE="hidden" name="pw_uid" value="<?=$user?>">
<INPUT TYPE="hidden" name="pw_pwd" value="<?=$pass?>">
</FORM>
</BODY>
</HTML>
