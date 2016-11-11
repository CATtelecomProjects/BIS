<?php
	session_start();

	include("../../includes/custom_files/functions.php");
	include("../../includes/custom_files/dbConnect.php");
	$dbOra  -> debug= false;
	
	$dates =  date("Y/m/d");
	 $sqlLogin = "SELECT USERNAME,
	 								USER_DESC,
								   PLEVEL,
								   ILEVEL,
								   SLEVEL,
								   ORG_CODE,
								   EMP_ID,
								   KLEVEL,
								   PASSWORD,
								   PASS_DW,
								   EMAIL,
								   STATUS, 
								   to_char(LAST_LOGIN,'dd-mm-yyyy hh:mi:ssam') as LAST_LOGIN,
								   TELEPHONE	,
								   USER_TYPE							   
					  FROM USER_LOGIN
					 WHERE 
					 			USERNAME = '".strtolower($_GET['username'])."' 
								AND PASSWORD = '".base64_encode($_GET['password'])."' " ;

	$rsLogin = $dbOra -> GetRow($sqlLogin);

	$username     = $rsLogin['USERNAME']; // user_desc
	$user_desc     = $rsLogin['USER_DESC']; // user_desc
	$plevel           = $rsLogin['PLEVEL']; //plevel
	$ilevel            = $rsLogin['ILEVEL']; //ilevel
	$slevel           = $rsLogin['SLEVEL']; //slevel
	$orgcode        = $rsLogin['ORG_CODE']; //org_code
	$emp             = $rsLogin['EMP_ID']; // emp_id
	$klevel            = $rsLogin['KLEVEL'];  // klevel
	$mlevels         = $rsLogin['SLEVEL']; //slevel
	$password      = $rsLogin['PASSWORD']; //password
	$pass_dw       = $rsLogin['PASS_DW']; // pass_dw
	$email            = $rsLogin['EMAIL']; //email
	$status           = $rsLogin['STATUS']; //status
	$lastlogin        = $rsLogin['LAST_LOGIN']; //Last Login
	$telephone      = $rsLogin['TELEPHONE']; // telephone
	$user_type      = $rsLogin['USER_TYPE']; // user_type 1= พนักงาน, 2 = หน่วยงาน, 3 = ทดสอบ
	//$orgid        = $rsLogin['ORG_ID']; // ORG_ID for send to BSC-KPI
	//$username_dw        = $rsLogin['USERNAME_DW']; // telephone



	// กรณีที่ระงับสิทธิืการใช้งาน
	if($status == "0"){
	
	echo "<br><span style=\"color:red;font-weight:bold\">ผู้ใช้งานถูกระงับสิทธิ์การใช้งานชั่วคราว <br>โปรดติดต่อผู้ดูแลระบบ โทร 7332-4 !!</span><br>&nbsp;<br>";
	echo "<input type=\"button\" name=\"button\" id=\"button\" value=\"กลับหน้าหลัก\" onclick=\"closeMessage();return false;\" style=\"cursor:pointer\" /><br>&nbsp;";
	
	
########################################################
	#### Insert log to COUNT_LOGIN_FAIL
	$sqlLoginFail = "INSERT INTO COUNT_LOGIN_FAIL(USERNAME,EMP_ID,ORG_CODE,LOGIN_DATE,IP,FAIL_DESC,FAIL_ID,IP_REAL) VALUES('$username','$emp','$orgcode',TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam'),'".$_SERVER['REMOTE_ADDR']."','User Access Denied',3,'".$_SERVER['HTTP_X_FORWARDED_FOR']."')";		
	$dbOra -> Execute($sqlLoginFail);	
					
########################################################
	#### Save log File to /var/log/bis
	$logData = "User Access Denied ,".date('Y/m/d h:i:s A').",".$username.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
	
	SaveLog($logData,'FAIL');
	?>
   <!--
    <script language = "javascript" type="text/javascript">
				alert  ("มีข้อผิดพลาด !! ชื่อผู้ใช้งานนี้ถูกระงับสิทธิ์การใช้งานชั่วคราว โปรดติดต่อผู้ดูแลระบบ โทร 7332-4");	
				window.location = "index.php";	
						
	</script>
    -->
    <?
 // End กรณีที่ระงับสิทธิืการใช้งาน
	}else if (count($rsLogin) > 0)	{  // ถ้ามีผู้ใช้งานตามที่ Login หาว่า Password Expire  หรือยัง
	
	 $sqlCount = "SELECT USERNAME
  							   FROM USER_LOGIN
 							   WHERE 
							   				USERNAME  = '".strtolower($_GET['username'])."'  AND PASSWORD = '".base64_encode($_GET['password'])."' 
											AND EXPIRE_DATE >= to_date('$dates','yyyy/mm/dd')";	

	$rsCount =  $dbOra -> getAll($sqlCount);	
	 $counts = count($rsCount);
	

	
		
		
// ถ้า Password และ สถานะใช้งานได้ปกติ
		if($status != "0"){		
			
			if($username <> "catsysmo"){ 
			
			$randText =  random_gen(30);
			
		 	$sqlStat = "INSERT INTO count_log (USERNAME,EMP_ID,ORG_CODE,LOG_DATE,IP,LOGOUT_TIME,SESSION_ID,IP_REAL) VALUES ('$username','$emp','$orgcode',TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam'),'".$_SERVER['REMOTE_ADDR']."', null,'".$randText."','".$_SERVER['HTTP_X_FORWARDED_FOR']."')";
		
			$dbOra -> Execute($sqlStat);			
			
			$_SESSION['randText'] = $randText ;
			

			$Now = date('d-m-Y');

			$timeToday  = mktime (0,0,0,date("m")  ,date("d")-1,date("Y"));
			$yesterday = strftime('%d-%m-%Y',$timeToday);
			
			$NowMonth = date('m-Y');
			
			$timeMonth  = mktime (0,0,0,date("m")-1  ,date("d"),date("Y"));
			$NowMonthPrevious= strftime('%m-%Y',$timeMonth);
				
			$NowYear = date('Y');
			
			$timeYear  = mktime (0,0,0,date("m")  ,date("d"),date("Y")-1);
			$YearPrevious= strftime('%Y',$timeYear);
			
		
			$sqlAll = "SELECT COUNT(*) AS COUNTS FROM COUNT_LOG";
			$resultAll = $dbOra -> GetRow($sqlAll);
			$hits = $resultAll['COUNTS'];
			
			$sqlToday = "SELECT COUNT(*) AS COUNTS_TODAY FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'DD-MM-YYYY') = '$Now'";
			$resultToDay = $dbOra->GetRow($sqlToday);
			$hitsToday =  $resultToDay['COUNTS_TODAY'];
			
			$sqlYesterday = " SELECT COUNT(*) AS COUNTS_YESTERDAY FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'DD-MM-YYYY') = '$yesterday'";
			$resultYesterday = $dbOra->GetRow($sqlYesterday);
			$hitsYesterday =  $resultYesterday['COUNTS_YESTERDAY'];
			
			 $sqlMonth =  " SELECT COUNT(*) AS COUNTS_MONTH FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'MM-YYYY') = '$NowMonth'";
			$resultMonth = $dbOra->GetRow($sqlMonth);
			$hitsMonth = $resultMonth['COUNTS_MONTH'];
			
			$sqlMonthPrevious =  " SELECT COUNT(*) AS COUNTS_MONTH_PREVIOUS FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'MM-YYYY') = '$NowMonthPrevious'";
			$resultMonthPrevious = $dbOra->GetRow($sqlMonthPrevious);
			$hitsMonthPrevious = $resultMonthPrevious['COUNTS_MONTH_PREVIOUS'];
			
			$sqlYear =  " SELECT COUNT(*) AS COUNTS_YEAR FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'YYYY') = '$NowYear'";
			$resultYear = $dbOra->GetRow($sqlYear);
			$hitsYear = $resultYear['COUNTS_YEAR'];
			
			$sqlYearPrevious  = " SELECT COUNT(*) AS COUNTS_YEAR_PREVIOUS FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'YYYY') = '$YearPrevious'";
			$resultYearPrevious = $dbOra->GetRow($sqlYearPrevious);
			$hitsYearPrevious = $resultYearPrevious['COUNTS_YEAR_PREVIOUS'];
			
			
			 $sqlUpdateStat = "UPDATE 
												USERS_STAT 
										SET 
												TODAY  =  $hitsToday  ,
												YESTERDAY = $hitsYesterday , 
												MONTH = $hitsMonth , 
												MONTH_LAST = $hitsMonthPrevious ,
												YEAR =  $hitsYear , 
												YEAR_LAST = $hitsYearPrevious ,
												TOTALS = $hits ";
			$dbOra -> Execute($sqlUpdateStat);
			
			
			
			$sqlUpdateStat1 = "UPDATE USERS_STAT_NEW SET STAT_TOTAL  =  $hitsToday  WHERE STAT_NAME = 'TODAY' ";
			$dbOra -> Execute($sqlUpdateStat1);
			
			$sqlUpdateStat2= "UPDATE USERS_STAT SET STAT_TOTAL  =  $hitsYesterday  WHERE STAT_NAME = 'YESTERDAY' ";			
			$dbOra -> Execute($sqlUpdateStat2);
			
			$sqlUpdateStat3 = "UPDATE USERS_STAT SET STAT_TOTAL  =  $hitsMonth  WHERE STAT_NAME = 'MONTH'";
			$dbOra -> Execute($sqlUpdateStat3);
			
			$sqlUpdateSta4 = "UPDATE USERS_STAT SET STAT_TOTAL  =  $hitsMonthPrevious  WHERE STAT_NAME = 'MONTH_LAST'";
			$dbOra -> Execute($sqlUpdateSta4);
			
			$sqlUpdateStat5 = "UPDATE USERS_STAT SET STAT_TOTAL  =  $hitsYear  WHERE STAT_NAME = 'YEAR' ";
			$dbOra -> Execute($sqlUpdateStat5);
			
			$sqlUpdateStat6 = "UPDATE USERS_STAT SET STAT_TOTAL  =  $hitsYearPrevious  WHERE STAT_NAME = 'YEAR_LAST' ";
			$dbOra -> Execute($sqlUpdateStat6);
			
			$sqlUpdateStat7 = "UPDATE USERS_STAT SET STAT_TOTAL  =  $hits  WHERE STAT_NAME = 'TOTALS' ";
			$dbOra -> Execute($sqlUpdateStat7);
			
			
			#=================================================================================#
						
			 $sqlLastLogin = "UPDATE user_login SET LAST_LOGIN = TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam')  WHERE USERNAME = '".strtolower($_GET['username'])."'";
			
			$dbOra -> Execute($sqlLastLogin);
			
			} // End if($username <> "catsysmo"){ 
			
			$_SESSION['usr'] = $username;
			$_SESSION['desc'] = $user_desc;
			$_SESSION['p'] = $plevel;
			$_SESSION['level'] = $ilevel;
			$_SESSION['s'] = $slevel;
			//$_SESSION['d'] = $dlevel;
			$_SESSION['mlevel'] = $slevel;
			$_SESSION['org'] = $orgcode;
			$_SESSION['userid'] = $emp;
			$_SESSION['klevel'] = $klevel;
			$_SESSION['password'] = $password;
			$_SESSION['pass_dw'] = base64_decode($pass_dw);
			$_SESSION['email'] = $email;
			$_SESSION['status'] = $status;			
			$_SESSION['lastlogin'] = $lastlogin;
			$_SESSION['telephone'] = $telephone;			 
		/*	$_SESSION['area'] = $area;*/
	        $_SESSION['mlevels']=$mlevels;
			$_SESSION['user_type'] = $user_type;
			//$_SESSION['username_dw']= $username_dw;
			//$_SESSION['orgid']=$orgid;
			
			
			
			########################################################			
		

		// กรณี Password หมดอายุ	
	if($counts <= 0){	
		$_SESSION['password_expire'] = true;
			echo "<br><span style=\"color:red;font-weight:bold\">Password หมดอายุ กรุณาเปลี่ยน Password ใหม่ !!</span><br>&nbsp;<br>";
			
		//เฉพาะ User type =2 ศูนย์บริการลูกค้า ,User type =3 Test User
		if( $user_type == "2" || $user_type == "3")	{
			echo "<input type=\"button\" name=\"button\" id=\"button\" value=\"เปลี่ยนรหัสผ่านใหม่\" onclick=\"window.location='modules.php?name=Login&op=chgpass';\" style=\"cursor:pointer\" /><br>&nbsp;";
		}if( $user_type == "1" )	{
			echo "<input type=\"button\" name=\"button\" id=\"button\" value=\"เปลี่ยนรหัสผ่านใหม่\" onclick=\"window.open('http://eim.cattelecom.com','emp_win','');window.location = 'modules.php?name=Login&op=Logout';\" style=\"cursor:pointer\" /><br>&nbsp;";
			//displayMessage('./modules/Login/dialog_Login.php','510','315');return false;
		}


		// กรณี Password หมดอายุ	เฉพาะ User type =2 ศูนย์บริการลูกค้า ,User type =3 Test User
	/*if($counts <= 0 && ($user_type == "2" || $user_type == "3")){	
		$_SESSION['password_expire'] = true;
			echo "<br><span style=\"color:red;font-weight:bold\">Password หมดอายุ กรุณาเปลี่ยน Password ใหม่ !!</span><br>&nbsp;<br>";
			echo "<input type=\"button\" name=\"button\" id=\"button\" value=\"เปลี่ยนรหัสผ่านใหม่\" onclick=\"window.location='modules.php?name=Login&op=chgpass';\" style=\"cursor:pointer\" /><br>&nbsp;";
			
		*/
		########################################################
	#### Insert log to COUNT_LOGIN_FAIL
	$sqlLoginFail = "INSERT INTO COUNT_LOGIN_FAIL(USERNAME,EMP_ID,ORG_CODE,LOGIN_DATE,IP,FAIL_DESC,FAIL_ID,IP_REAL) VALUES('$username','$emp','$orgcode',TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam'),'".$_SERVER['REMOTE_ADDR']."','Password Expire',2,'".$_SERVER['HTTP_X_FORWARDED_FOR']."')";		
	$dbOra -> Execute($sqlLoginFail);
		
		########################################################
		#### Save log File to /var/log/bis
		$logData = "Password Expire ,".date('Y/m/d h:i:s A').",".$username.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
		
		SaveLog($logData,'FAIL');
     
		}else{ // End // กรณี Password หมดอายุ	
		
		$sqlChkExpire = "SELECT TO_CHAR(EXPIRE_DATE,'DD/MM/YYYY') AS EXPIRE,
      										 TO_CHAR(TO_DATE('".$dates."','YYYY/MM/DD'), 'DD/MM/YYYY') as TODAY,
 									         TRUNC((((86400 * (EXPIRE_DATE -  TO_DATE('".$dates."','YYYY/MM/DD'))) / 60) / 60) / 24)  as DAYS
								  FROM USER_LOGIN
								 WHERE USERNAME = '".$username."'";
		$rsChkExpire = $dbOra -> GetRow($sqlChkExpire);
		if( ($rsChkExpire['DAYS'] <= 7 ) && ($rsChkExpire['DAYS'] > 0)){
			$strChkExpire = "<font color='red'><img src='./images/icon-warning.gif' align='absmiddle'> รหัสผ่านจะหมดอายุในวันที่ ".datethai($rsChkExpire['EXPIRE'],"short","/")." (".$rsChkExpire['DAYS']." วัน) !!</font><br>";
		}
		
		
		$lastLogin = $_SESSION['lastlogin']==""?"ไม่พบข้อมูล" : datethaiTime($_SESSION['lastlogin']);
	
		
		echo "<br><span style=\"color:green;font-weight:bold\">ยินดีต้อนรับ <font color='blue'>$_SESSION[desc]</font> เข้าสู่ระบบ..</span><br>&nbsp;<br>";	
		echo "<font size='9px'>เข้าใช้งานล่าสุด ".$lastLogin."</font><br>&nbsp;<br>";	
	    echo $strChkExpire;
		echo "<br><input type=\"button\" name=\"button\" id=\"button\" value=\"เข้าสู่หน้าหลัก\" onclick=\"window.location = 'index.php'\" style=\"cursor:pointer\" /><br>&nbsp;";
		
	########################################################
		#### Save log File to /var/log/bis
		$logData = "Login ,".date('Y/m/d h:i:s A').",".$username.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
		
		SaveLog($logData,'SUCCESS');
			
			
		//echo "</center>";
		} // กรณี Password หมดอายุ	End if($counts <= 0){	
		
	} // End if ($counts != 0 && $status != "0"){		
	
	// กรณี Password ที่ Login ไม่ถูกต้อง
	}else	{
		
		if (!$_GET['username']) return;
	//echo "<center>";
	echo "<br><span style=\"color:red;font-weight:bold\">Username หรือ Password ไม่ถูกต้อง !!</span><br>&nbsp;<br>";
	echo "<input type=\"button\" name=\"button\" id=\"button\" value=\"เข้าสู่ระบบใหม่\" onclick=\"displayMessage('./modules/Login/dialog_Login.php','510','315');return false\" style=\"cursor:pointer\" /><br>&nbsp;";
				
		########################################################
	#### Insert log to COUNT_LOGIN_FAIL
	$sqlLoginFail = "INSERT INTO COUNT_LOGIN_FAIL(USERNAME,LOGIN_DATE,IP,FAIL_DESC,FAIL_ID,IP_REAL,PASSWORD) VALUES('".strtolower($_GET['username'])."', TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam'),'".$_SERVER['REMOTE_ADDR']."','Invalid Username or Password',1,'".$_SERVER['HTTP_X_FORWARDED_FOR']."','".base64_encode($_GET['password'])."')";		
	$dbOra -> Execute($sqlLoginFail);
	
		########################################################
	#### Save log File to /var/log/bis
	$logData = "Invalid Username or Password -> ".strtolower($_GET['username']).":".$_GET['password']." ,".date('Y/m/d h:i:s A').",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
	
	SaveLog($logData,'FAIL');
	//echo "</center>";
		
	}  // End ถ้ามีผู้ใช้งานตามที่ Login หาว่า Password Expire  หรือยัง
		
	
?>
