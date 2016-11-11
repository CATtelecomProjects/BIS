<?
session_start();
include("../../includes/custom_files/functions.php");
include("../../includes/custom_files/dbConnect.php");
$dbOra  -> debug= false;



if($_GET['sysname'] == "Request Username/Password"){
	$splitEmail = split("@" , $_GET['email']);
	$userEvent = $splitEmail[0];
}else{
	$userEvent = $_SESSION['usr'];
}


// ถ้า User เป็น catsysmo  ไม่ต้องเก็บ logs
if($userEvent == "catsysmo") return;

if(isset($_GET['sysname'])){
	$sql = "INSERT INTO COUNT_LOGIN_EVENT
								(EVENT_TIME,EMP_ID,USERNAME,ORG_CODE,IP,IP_REAL,SYSTEM_NAME,IS_DENIED,SESSION_ID)
						VALUES(TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam'),									
									'".$_SESSION['userid']."',
									'".$userEvent."',
									'".$_SESSION['org']."',
									'".$_SERVER['REMOTE_ADDR']."',
									'".$_SERVER['HTTP_X_FORWARDED_FOR']."',
									'".$_GET['sysname']."',
									'".$_GET['denied']."',
									'".$_SESSION['randText']."'						
						)";
	$dbOra -> Execute($sql);			
}

?>