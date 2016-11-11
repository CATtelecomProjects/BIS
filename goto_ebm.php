<?php
session_start();
$_SESSION['userid'] = 'apinan.s';
$_SESSION['password'] = 'P@ssw0rd';

$autoForm = " <form id= \"ebm_form\" action=\"http://10.32.13.15:9704/analytics/saw.dll?bieehome\" method=\"post\" > ";
		$autoForm .= " <input name=\"NQUser\" type=\"hidden\" value=\"".$_SESSION['userid']."\"> ";
		$autoForm .= " <input name=\"NQPassword\" type=\"hidden\" value=\"".$_SESSION['password']."\">";
		
		$autoForm .= " </form>";    	
		echo $autoForm;
echo '<script language="javascript">';
	
		echo "document.getElementById('ebm_form').submit();"; // SUBMIT FORM
		
		echo '</script>';

?>
