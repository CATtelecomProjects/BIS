<?
//$db =DWCAT805; //172.16.192.31
$db =DWCAT; //10.50.10.51

// $db_conn=ocilogon("telestat","Telestat",$db);

//$parsed=ociparse($db_conn,$cmdstr);
//ociexecute($parsed); 

$db_conn = ocilogon("tris","Tris",$db) or die("�������ö�Դ��� Database Server ��㹢�й��");
/*$cmdstr="select * from m04_province";
$parsed=ociparse($db_conn,$cmdstr);
ociexecute($parsed);
$nrows=ocifetchstatement($parsed,$results);
echo "Found ;$nrows aaaaresults<br><br>\n";*/
?>