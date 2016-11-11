<?php
// $db_conn=ocilogon("telestat","Telestat",$db);

//$parsed=ociparse($db_conn,$cmdstr);
//ociexecute($parsed); 

//$db_conn = ocilogon("telestat","Telestat","DWCAT805");

$tns = "DWCAT";
$OraUser = "telestat";
$OraPwd = "Telestat";
$conn = OCILogon($OraUser,$OraPwd,$tns);  
if (!$conn) {
 $e = oci_error();   // For oci_connect errors pass no handle
 echo htmlentities($e['message']);
}else{
	echo "Jumjy connect Sucsess";
}

?>
