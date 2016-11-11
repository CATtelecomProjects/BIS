<?php
session_start();

include("../../includes/custom_files/functions.php");
include("../../includes/custom_files/dbConnect.php");
$dbOra  -> debug= false;

if($_GET['action']== "chkUser"){
	$sqlchkUser = "SELECT USERNAME FROM USER_LOGIN WHERE EMAIL = '".$_GET['email']."' ";
	$rschkUser =  $dbOra -> GetRow($sqlchkUser);
	if(count($rschkUser) > 0){		
		echo "<span style=\"color:#0000ff\">ตรวจสอบชื่อ E-Mail  <b><u>".$_GET['email']."</u></b> ถูกต้อง !!</span>";
		/*echo "<script>";
		echo "document.getElementById('send').disabled='';";
		echo "</script>";
		*/
	}else{
		echo "<span style=\"color:#ff0000\">ไม่พบ E-Mail <b><u>".$_GET['email']."</u></b> กรุณาตรวจสอบอีกครั้ง !!</span>";
	}
}

if($_GET['action'] == "send_forgot_pass"){
	/*
	 $sql_send_forgot_pass = "SELECT 
												EMP_ID , USERNAME , USER_DESC , PASSWORD , EMAIL , PLEVEL , TELEPHONE , to_char(LAST_LOGIN,'dd-mm-yyyy hh:mi:ssam') as LAST_LOGIN , to_char(EXPIRE_DATE,'dd-mm-yyyy hh:mi:ssam') as EXPIRE_DATE , FORGOT_QUESTION , FORGOT_ANSWER
											FROM USER_LOGIN 
											WHERE USERNAME = '".$_GET['username']."' 
														AND FORGOT_QUESTION = '".$_GET['forgot_question']."'  
														AND FORGOT_ANSWER= '".base64_encode($_GET['forgot_answer'])."' ";
	*/
	$sql_send_forgot_pass = "SELECT 
												EMP_ID , USERNAME , USER_DESC , PASSWORD , EMAIL , PLEVEL , TELEPHONE , to_char(LAST_LOGIN,'dd-mm-yyyy hh:mi:ssam') as LAST_LOGIN , to_char(EXPIRE_DATE,'dd-mm-yyyy hh:mi:ssam') as EXPIRE_DATE , PASS_DW
											FROM USER_LOGIN 
											WHERE EMAIL = '".$_GET['email']."'  ";
	$rs_send_forgot_pass =  $dbOra -> GetRow($sql_send_forgot_pass);
	if(count($rs_send_forgot_pass) > 0 ){
			sendMail($rs_send_forgot_pass);
	}else{
			echo "<br><span style=\"color:red;font-weight:bold\">E-mail ไม่ถูกต้อง !!</span><br>&nbsp;<br>";
			echo "<input type=\"button\" name=\"button\" id=\"button\" value=\"ลองใหม่\" onclick=\"displayMessage('./modules/Login/dialog_ForgetPasswd.php','450','230');return false\" style=\"cursor:pointer\" /><br>&nbsp;";
	}
}



?>