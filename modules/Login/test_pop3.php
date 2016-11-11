<?php
	session_start();

	include("../../includes/custom_files/functions.php");
	include("../../includes/custom_files/dbConnect.php");
	require("../../includes/pop3/popAuth.inc.php");
	
	$dbOra  -> debug= 0;
	
	
	class Auth extends POPAuth 
	{
		var $_db;
		var $dates;
		var $user_type;
		var $rs_data;
		var $is_valid;
		var $logData;
		var $randText;
		

	}
	//##############################################################################
	
	$Auth  = new Auth();
	$Auth->host = "catmail.cattelecom.com";
	$Auth->port = "110";
	$Auth->username = trim($_GET['username']);
	$Auth->password = trim($_GET['password']);
	$Auth->dates =  date("Y/m/d");

	
	

		
			$pop_ok = $Auth->validate();
			
			if($pop_ok){ // ถ้า Authen ผ่าน Pop3 สำเร็จ
				echo "Login OK";	
				
			}else{
				echo "Log in Fail";
			}//  End if($pop_ok){
			
		

		

		
	
?>
