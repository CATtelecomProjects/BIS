<?php
include('adodb.inc.php');

$myServer = "10.42.4.2:1433";
$myUser = "catit";
$myPass = "itcat";
$myDB = "Report eDocument";

$dbcstring = "mssql://$myUser:$myPass@$myServer";
$db = NewADOConnection($dbcstring);

$db->debug=true;  
  
  if($db) {
		echo "Connect Success!!";  
  }else{
		echo "Connect Fail!!";  	  
  }
  
  
$sql = "select table_name from information_schema.tables";  

$rs = $db ->GetAll($sql);

for($i=0;$i<count($rs);$i++){
	echo $rs[$i]['table_name']."<hr>";
}
  
?>