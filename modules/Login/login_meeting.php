<?php
session_start();

$username = $_SESSION['userid'];
$password = $_SESSION['userid'];
echo "<title>Loading...</title>";
echo "<body style=\"background-color:#eeeeee\"> ";
$autoForm = " <form method=\"post\" action=\"https://bis.cattelecom.com/meetingroom/admin.php\" id=\"logonForm\">";       
$autoForm .= " <input type=\"hidden\" id=\"NewUserName\" name=\"NewUserName\" value=\"$username\">"; 
$autoForm .= " <input type=\"hidden\" id=\"NewUserPassword\" name=\"NewUserPassword\"  value=\"$password\">"; 

$autoForm .= " <input type=\"hidden\" name=\"returl\" value=\"\">"; 
$autoForm .= " <input type=\"hidden\" name=\"TargetURL\" value=\"https://bis.cattelecom.com/meetingroom/index.php?\">"; 
$autoForm .= " <input type=\"hidden\" name=\"Action\" value=\"SetName\">"; 
$autoForm .= " </form>";   
 	
echo $autoForm;

echo "<span style=\"text-align:center\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
echo "<h5><img src=\"../../images/loading-gear.gif\"><br> Loading to MRBS...</h5></span>";

echo "<script language=\"javascript\">";	
echo "document.getElementById('logonForm').submit();"; // SUBMIT FORM
echo '</script>';
echo "</body>";
?>

 
