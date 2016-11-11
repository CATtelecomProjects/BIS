<?php
session_start();

print "<pre>";
print_r($_SESSION);
print "</pre>";

/*
echo "<hr>Password is : ".base64_decode($_SESSION['password']);

 $a = shell_exec('df -h');
echo '<h2>Disk space</h2><pre>';
echo $a;
echo '</pre>';
 
$b = shell_exec('uname -a');
echo '<h2>Uname -a</h2><pre>';
echo $b;
echo '</pre>';

*/
/*$c = shell_exec('ps -ef');
echo '<h2>ps -ef</h2><pre>';
echo $c;
echo '</pre>';
*/
?>
<!--
<form action="http://dw-webreport.cattelecom.com/dwdm-management/modules/SM/open_dwdm_report.php" method="post" target="_blank">
<button>Open DW/DM Report</button>
<input name="username" type="text" value="<?=$_SESSION[userid]?>">
<input name="password"  type="text" value="<?=$_SESSION[password]?>">
</form>
-->
<form action="http://dw-webreport.cattelecom.com/dwdm-management/signin_ext.php" method="post" target="_blank">
<button>Search DW/DM report</button>
<input name="redirect" type="hidden" value="setModule%3DSM%26setPage%3Ddwdm_sm_search_report">
<input name="userid"  type="hidden" value="<?=$_SESSION[userid]?>">
<input name="password"  type="hidden" value="<?=$_SESSION[password]?>">
<input name="desc"  type="hidden" value="<?=$_SESSION[desc]?>">
</form>
