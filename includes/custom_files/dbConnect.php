<?php

include('adodb.inc.php');
$tnsName = "DWCAT";
$userName = "mis";
$Password = "mis805";

$dbOra = NewADOConnection("oci8");
$dbOra ->Connect($tnsName, $userName, $Password);
$dbOra->SetFetchMode(ADODB_FETCH_ASSOC);
$dbOra -> debug=false;

?>