<?php
session_start();
//$_SESSION['userid'] = 'apinan.s';
//$_SESSION['password'] = 'P@ssw0rd';
$_SESSION['userid'] =  $usr;
$_SESSION['password'] = 'ebmC@t2016';

$autoForm = " <form id= \"logonForm\" action=\"http://10.32.13.15:9704/analytics/saw.dll?Dashboard\" method=\"post\" > ";
		$autoForm .= " <input name=\"NQUser\" id=\"sawlogonuser\" type=\"hidden\" value=\"".$_SESSION['userid']."\"> ";
		$autoForm .= " <input name=\"NQPassword\" id=\"sawlogonpwd\" type=\"hidden\" value=\"".$_SESSION['password']."\">";
		
		$autoForm .= " </form>";    	
		echo $autoForm;
echo '<script language="javascript">';
	
		echo "document.getElementById('logonForm').submit();"; // SUBMIT FORM
		
		echo '</script>';

?>
