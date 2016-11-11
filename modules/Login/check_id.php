<?php
	session_start();

	include("../../includes/custom_files/functions.php");
	include("../../includes/custom_files/dbConnect.php");
	require("../../includes/pop3/popAuth.inc.php");
	
	$dbOra  -> debug= 0;
	
	//show_post();
	class Auth extends POPAuth 
	{
		var $_db;
		var $dates;
		var $user_type;
		var $rs_data;
		var $is_valid;
		var $logData;
		var $randText;
		

/*****************************************************************/		
		function user_login_db(){		

			$str_type = $this->user_type == "1" ? " AND PASSWORD = '".base64_encode($this->password)."' " : " AND PASSWORD = '".base64_encode($this->password)."' ";
		
			 $sqlLogin = "SELECT USERNAME,
											USER_DESC,
										   PLEVEL,
										   ILEVEL,
										   SLEVEL,
										   T1.ORG_CODE,
										   T2.COST_CENTER,
										   EMP_ID,
										   KLEVEL,
										   PASSWORD,
										   PASS_DW,
										   EMAIL,
										   STATUS, 
										   TO_CHAR(LAST_LOGIN,'dd-mm-yyyy hh:mi:ssam') as LAST_LOGIN,
										   TELEPHONE	,
										   USER_TYPE							   
							  FROM USER_LOGIN  T1
							  LEFT JOIN COSTCENTER T2
									ON T1.ORG_CODE  = T2.ORG_CODE
							 WHERE 
										(USERNAME = '".$this->username."'  or EMP_ID = '".$this->username."' ) $str_type 									
										" ;
		
			$rs =  $this->_db -> GetRow($sqlLogin);
			
				if(count($rs)>0){
					$this->is_valid = true;
					$this->rs_data = $rs;
				}else{
					$this->is_valid = false;
				}
			
			}
			
			/*****************************************************************/
			function regis_session(){
						
						$username     = $this->rs_data['USERNAME']; // user_desc
						$user_desc     = $this->rs_data['USER_DESC']; // user_desc
						$plevel           = $this->rs_data['PLEVEL']; //plevel
						$ilevel            = $this->rs_data['ILEVEL']; //ilevel
						$slevel           = $this->rs_data['SLEVEL']; //slevel
						$orgcode        = $this->rs_data['ORG_CODE']; //org_code
	                    $cost_center	 =$this->rs_data['COST_CENTER']; //cost_center				
						$emp             = $this->rs_data['EMP_ID']; // emp_id
						$klevel            = $this->rs_data['KLEVEL'];  // klevel
						$mlevels         = $this->rs_data['SLEVEL']; //slevel
						$password      = $this->rs_data['PASSWORD']; //password
						$pass_dw       = $this->rs_data['PASS_DW']; // pass_dw
						$email            = $this->rs_data['EMAIL']; //email
						$status           = $this->rs_data['STATUS']; //status
						$lastlogin        = $this->rs_data['LAST_LOGIN']; //Last Login
						$telephone      = $this->rs_data['TELEPHONE']; // telephone
						$user_type      = $this->rs_data['USER_TYPE']; // user_type 1= พนักงาน, 2 = หน่วยงาน, 3 = ทดสอบ
						//$orgid        = $this->rs_data['ORG_ID']; // ORG_ID for send to BSC-KPI
						//$username_dw        = $this->rs_data['USERNAME_DW']; // telephone
						
						$_SESSION['usr'] = $username;
						$_SESSION['desc'] = $user_desc;
						$_SESSION['p'] = $plevel;
						$_SESSION['level'] = $ilevel;
						$_SESSION['s'] = $slevel;
						//$_SESSION['d'] = $dlevel;
						$_SESSION['mlevel'] = $slevel;
						$_SESSION['org'] = $orgcode;
						$_SESSION['cost_center'] = $cost_center;
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
			}

		/*****************************************************************/
			// หา User ที่ login เข้ามาว่ามีอยู่ในระบบจริงหรือไม่
			function check_user(){
				$sqlLogin = "SELECT USERNAME,	 								
											   USER_TYPE							   
								  FROM USER_LOGIN
								 WHERE 
											(USERNAME = '".$this->username."'  or EMP_ID = '".$this->username."' ) 	" ;
			
				return  $this->_db-> GetRow($sqlLogin);	
			}
			
		/*****************************************************************/
	
		function update_stat(){
			// ถ้า Password และ สถานะใช้งานได้ปกติ
				
			if($this->username <> "catsysmo"){ 


			
			$sqlStat = "INSERT INTO count_log (USERNAME,EMP_ID,ORG_CODE,LOG_DATE,IP,LOGOUT_TIME,SESSION_ID,IP_REAL) VALUES ('".$this->rs_data['USERNAME']."','".$this->rs_data['EMP_ID']."','".$this->rs_data['ORG_CODE']."',CURRENT_TIMESTAMP,'".$_SERVER['REMOTE_ADDR']."', null,'".$this->randText."','".$_SERVER['HTTP_X_FORWARDED_FOR']."')";
		
			$this->_db -> Execute($sqlStat);			
			
			$_SESSION['randText'] = $this->randText ;
			

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
			$resultAll = $this->_db -> GetRow($sqlAll);
			$hits = $resultAll['COUNTS'];
			
			$sqlToday = "SELECT COUNT(*) AS COUNTS_TODAY FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'DD-MM-YYYY') = '$Now'";
			$resultToDay = $this->_db->GetRow($sqlToday);
			$hitsToday =  $resultToDay['COUNTS_TODAY'];
			
			$sqlYesterday = " SELECT COUNT(*) AS COUNTS_YESTERDAY FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'DD-MM-YYYY') = '$yesterday'";
			$resultYesterday = $this->_db->GetRow($sqlYesterday);
			$hitsYesterday =  $resultYesterday['COUNTS_YESTERDAY'];
			
			 $sqlMonth =  " SELECT COUNT(*) AS COUNTS_MONTH FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'MM-YYYY') = '$NowMonth'";
			$resultMonth = $this->_db->GetRow($sqlMonth);
			$hitsMonth = $resultMonth['COUNTS_MONTH'];
			
			$sqlMonthPrevious =  " SELECT COUNT(*) AS COUNTS_MONTH_PREVIOUS FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'MM-YYYY') = '$NowMonthPrevious'";
			$resultMonthPrevious = $this->_db->GetRow($sqlMonthPrevious);
			$hitsMonthPrevious = $resultMonthPrevious['COUNTS_MONTH_PREVIOUS'];
			
			$sqlYear =  " SELECT COUNT(*) AS COUNTS_YEAR FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'YYYY') = '$NowYear'";
			$resultYear = $this->_db->GetRow($sqlYear);
			$hitsYear = $resultYear['COUNTS_YEAR'];
			
			$sqlYearPrevious  = " SELECT COUNT(*) AS COUNTS_YEAR_PREVIOUS FROM COUNT_LOG WHERE TO_CHAR(LOG_DATE,'YYYY') = '$YearPrevious'";
			$resultYearPrevious = $this->_db->GetRow($sqlYearPrevious);
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
			$this->_db -> Execute($sqlUpdateStat);
			
			
			
			$sqlUpdateStat = "UPDATE 
											USERS_STAT SET TODAY  =  $hitsToday  , 
											YESTERDAY  =  $hitsYesterday,
											 MONTH_LAST  =  $hitsMonthPrevious ,
											YEAR  =  $hitsYear ,
											 YEAR_LAST  =  $hitsYearPrevious ,
											 TOTALS  =  $hits  ";
			$this->_db -> Execute($sqlUpdateStat);
			
			
			/*$sqlUpdateStat2= "UPDATE USERS_STAT SET YESTERDAY  =  $hitsYesterday  WHERE STAT_NAME = 'YESTERDAY' ";			
			$this->_db -> Execute($sqlUpdateStat2);
			
			$sqlUpdateStat3 = "UPDATE USERS_STAT SET MONTH  =  $hitsMonth  WHERE STAT_NAME = 'MONTH'";
			$this->_db -> Execute($sqlUpdateStat3);
			
			$sqlUpdateSta4 = "UPDATE USERS_STAT SET MONTH_LAST  =  $hitsMonthPrevious  WHERE STAT_NAME = 'MONTH_LAST'";
			$this->_db -> Execute($sqlUpdateSta4);
			
			$sqlUpdateStat5 = "UPDATE USERS_STAT SET YEAR  =  $hitsYear  WHERE STAT_NAME = 'YEAR' ";
			$this->_db -> Execute($sqlUpdateStat5);
			
			$sqlUpdateStat6 = "UPDATE USERS_STAT SET YEAR_LAST  =  $hitsYearPrevious  WHERE STAT_NAME = 'YEAR_LAST' ";
			$this->_db -> Execute($sqlUpdateStat6);
			
			$sqlUpdateStat7 = "UPDATE USERS_STAT SET TOTALS  =  $hits  WHERE STAT_NAME = 'TOTALS' ";
			$this->_db -> Execute($sqlUpdateStat7);
			*/
			
			#=================================================================================#
						
		//			 $sqlLastLogin = "UPDATE user_login SET LAST_LOGIN = CURRENT_TIMESTAMP  (USERNAME = '".$this->username."'  or EMP_ID = '".$this->username."' ) " ;
					 $sqlLastLogin = "UPDATE user_login SET LAST_LOGIN = CURRENT_TIMESTAMP  WHERE USERNAME = '".$this->rs_data['USERNAME']."'";
			
			$this->_db -> Execute($sqlLastLogin);
			
			} // End if($username <> "catsysmo"){ 
		} // End update_stat
	/*****************************************************************/
	
	
	
		// กรณีรหัสผ่านไม่ถูกต้อง
		function user_invalid(){
				//if (!$this->username || $this->username == "catsysmo") return;			
				 $pos = strpos($this->username,'catsysmo');
				 
				  if ($pos === false) {
     
  
			
			//	if($this->username <> "catsysmo"){ 
				
				echo "<br><span style=\"color:red;font-weight:bold\">Username หรือ Password ไม่ถูกต้อง !!</span><br>&nbsp;<br>";
				echo "<span id=\"toLogin\">เข้าสู่ระบบใหม่</span><br>&nbsp;";
							
					########################################################
				#### Insert log to COUNT_LOGIN_FAIL
								$sqlLoginFail = "INSERT INTO COUNT_LOGIN_FAIL(USERNAME,LOGIN_DATE,IP,FAIL_DESC,FAIL_ID,IP_REAL,PASSWORD) VALUES('".$this->username."', CURRENT_TIMESTAMP ,'".$_SERVER['REMOTE_ADDR']."','Invalid Username or Password',1,'".$_SERVER['HTTP_X_FORWARDED_FOR']."','".base64_encode($this->password)."')";		
				$this->_db -> Execute($sqlLoginFail);
				
					########################################################
				#### Save log File to /www/bis/logs/
				$this->logData = "Invalid Username or Password -> ".$this->username.":".$this->password." ,".date('Y/m/d h:i:s A').",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
				
			//	} // End if

  } // End if


			
		}
		
		
			/*****************************************************************/
		// กรณีที่ระงับสิทธิืการใช้งาน
		function user_denied(){
	
			
			echo "<br><span style=\"color:red;font-weight:bold\">ผู้ใช้งานถูกระงับสิทธิ์การใช้งานชั่วคราว <br>โปรดติดต่อผู้ดูแลระบบ โทร 7332-4 !!</span><br>&nbsp;<br>";
			echo "<span id=\"toLogin\">กลับหน้าเข้าสู่ระบบใหม่</span><br>&nbsp;";
	
	
########################################################
	#### Insert log to COUNT_LOGIN_FAIL
	$sqlLoginFail = "INSERT INTO COUNT_LOGIN_FAIL(USERNAME,EMP_ID,ORG_CODE,LOGIN_DATE,IP,FAIL_DESC,FAIL_ID,IP_REAL) VALUES('$this->username','".$this->rs_data['EMP_ID']."','".$this->rs_data['ORG_CODE']."',CURRENT_TIMESTAMP,'".$_SERVER['REMOTE_ADDR']."','User Access Denied',3,'".$_SERVER['HTTP_X_FORWARDED_FOR']."')";		
	$this->_db -> Execute($sqlLoginFail);	
					
########################################################
	#### Save log File to /var/log/bis
	$this->logData = "User Access Denied ,".date('Y/m/d h:i:s A').",".$this->username.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";


		}
			/*****************************************************************/
	
	
	
	//	ตรวจสอบว่าผู้ใช้งานหมดอายุหรือยัง
	function check_expire(){
		
		
		  $sqlCount = "SELECT USERNAME
  							   FROM USER_LOGIN
 							   WHERE 
							   				(USERNAME = '".$this->username."'  or EMP_ID = '".$this->username."' ) 	AND EXPIRE_DATE >= to_date('$this->dates','yyyy/mm/dd')";	

				$rsCount =  $this->_db -> getAll($sqlCount);	
//				 if(count($rsCount)>0){
					 return false; // ยังไม่ expire
//				 }else{
//					return true; // Expire แล้ว					 
	//			 }


	} // End check_expire
		
		
			/*****************************************************************/
	
	function user_expire(){
		
					
		echo "<br><span style=\"color:red;font-weight:bold\">Password หมดอายุ กรุณาเปลี่ยน Password ใหม่ !!</span><br>&nbsp;<br>";
			
		//เฉพาะ User type =2 ศูนย์บริการลูกค้า ,User type =3 Test User
		if( $this->user_type == "2" || $this->user_type == "3")	{
			echo "<span id='pass_expire1'>เปลี่ยนรหัสผ่านใหม่</span><br>&nbsp;";
		}if( $this->user_type == "1" )	{
			echo "<span id='pass_expire2'>เปลี่ยนรหัสผ่านใหม่</span><br>&nbsp;";		
		}


		########################################################
	#### Insert log to COUNT_LOGIN_FAIL
	$sqlLoginFail = "INSERT INTO COUNT_LOGIN_FAIL(USERNAME,EMP_ID,ORG_CODE,LOGIN_DATE,IP,FAIL_DESC,FAIL_ID,IP_REAL) VALUES('$this->username','$emp','$orgcode',CURRENT_TIMESTAMP,'".$_SERVER['REMOTE_ADDR']."','Password Expire',2,'".$_SERVER['HTTP_X_FORWARDED_FOR']."')";		
	$this->_db -> Execute($sqlLoginFail);
		
		########################################################
		#### Save log File to /www/bis/logs
		$this->logData = "Password Expire ,".date('Y/m/d h:i:s A').",".$this->username.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
		
	
	} // End user_expire
	
	
			/*****************************************************************/	
	// กรณี Login สำเร็จ
	function login_success(){
		$sqlChkExpire = "SELECT TO_CHAR(EXPIRE_DATE,'DD/MM/YYYY') AS EXPIRE,
      										 TO_CHAR(TO_DATE('".$this->dates."','YYYY/MM/DD'), 'DD/MM/YYYY') as TODAY,
 									         TRUNC((((86400 * (EXPIRE_DATE -  TO_DATE('".$this->dates."','YYYY/MM/DD'))) / 60) / 60) / 24)  as DAYS
								  FROM USER_LOGIN
								 WHERE (USERNAME = '".$this->username."'  or EMP_ID = '".$this->username."' )";
		$rsChkExpire = $this->_db -> GetRow($sqlChkExpire);
		if( ($rsChkExpire['DAYS'] <= 7 ) && ($rsChkExpire['DAYS'] > 0)){
			$strChkExpire = "<font color='red'><img src='./images/icon-warning.gif' align='absmiddle'> รหัสผ่านจะหมดอายุในวันที่ ".$rsChkExpire['EXPIRE']." (".$rsChkExpire['DAYS']." วัน) !!</font><br>";
		}
		
		
		$lastLogin = $_SESSION['lastlogin']==""?"ไม่พบข้อมูล" : $_SESSION['lastlogin'];
	
		
		echo "<br><span style=\"color:green;font-weight:bold\">ยินดีต้อนรับ <font color='blue'>".$this->rs_data['USER_DESC']."</font> เข้าสู่ระบบ..</span><br>&nbsp;<br>";	
		echo "<font size='9px'>เข้าใช้งานล่าสุด ".$this->rs_data['LAST_LOGIN']."</font><br>&nbsp;<br>";	
	    echo $strChkExpire;
		echo "<br><span id='toHome'>เข้าสู่หน้าหลัก</span><br>&nbsp;";
		
	########################################################
		#### Save log File to /var/log/bis
		$this->logData = "Login ,".date('Y/m/d h:i:s A').",".$this->username.",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
				
	} // End login_success
		
		
		
	} // End Class
		
	
	
	
	//##############################################################################
	
	$Auth  = new Auth();
	$Auth->host = "catmail.cattelecom.com";
	$Auth->port = "110";
	$Auth->username = trim(stripslashes($_POST['username']));
	$Auth->password = trim(stripslashes($_POST['password']));
	$Auth->dates =  date("Y/m/d");
	$Auth->_db = $dbOra;
	$Auth->randText = random_gen(30);
	
	
	// Step 1 - ตรวจสอบก่อนว่า User ที่ login เข้ามามีอยู่จริงในระบบหรือไม่
	$chk_user = $Auth->check_user();
	
	if (count($chk_user)>0){// แสดงว่ามี User ในระบบจริง
	
		  $Auth->user_type = $chk_user['USER_TYPE']; // user_type 1= พนักงาน, 2 = หน่วยงาน, 3 = ทดสอบ
		
	/*	
	
	if($Auth->user_type == "1"){ // หารหัสผ่านใน pop3
		
			$pop_ok = $Auth->validate();
			
			if($pop_ok){ // ถ้า Authen ผ่าน Pop3 สำเร็จ
				
				$Auth->user_login_db();
				
				
				
				$status = $Auth->rs_data['STATUS'];
				$expire = $Auth->check_expire();
				
				if($status == "0"){ //กรณีที่ระงับสิทธิืการใช้งาน
				
					$Auth->user_denied();
					SaveLog($Auth->logData,'FAIL');		
				
				}else if($expire){ // ถ้าี Expire 
					
					$_SESSION['password_expire'] = true;
					$Auth->user_expire();
					SaveLog($Auth->logData,'FAIL');
			
				}else{ // Login success
			
					$Auth->login_success();
					$Auth->regis_session();
					$Auth->update_stat();
					SaveLog($Auth->logData,'SUCCESS');
					
				}// End if($status == "0")
					
			}else{ // ถ้า Authen ไม่ผ่าน POP3
				
					$Auth->user_invalid();
					SaveLog($Auth->logData,'FAIL');	
			}//  End if($pop_ok){
			
		
		}else{ // ถ้า user type <> 1 ให้ไปดึงจาก DB 
		
	
	
	*/
				
				$Auth->user_login_db(); // ดึงค่าจาก DB
				

				
				if($Auth->is_valid){ // ถ้าพบใน DB
				
						$status = $Auth->rs_data['STATUS'];
						$expire = $Auth->check_expire();
						
						if($status == "0"){ //กรณีที่ระงับสิทธิืการใช้งาน
						
							$Auth->user_denied();
							SaveLog($Auth->logData,'FAIL');		
						
						}else if($expire){ // ถ้าี Expire 
							
							$_SESSION['password_expire'] = true;
							$Auth->user_expire();
							SaveLog($Auth->logData,'FAIL');
					
						}else{
							$_SESSION['password_expire'] = false;
							$Auth->login_success();
							$Auth->regis_session();
							$Auth->update_stat();
							SaveLog($Auth->logData,'SUCCESS');
							
						}// End if($status == "0")
							
					
				}else{ // ถ้าไม่พบใน DB
						
						$expire = $Auth->check_expire();//
						
						if($expire){//
							$_SESSION['password_expire'] = true;//
							$Auth->user_expire();//
							SaveLog($Auth->logData,'FAIL');	 //
						}else{ //
							$Auth->user_invalid();
							SaveLog($Auth->logData,'FAIL');
						}//
						
						
						
				}
	//	} // End if($Auth->user_type == "1")
	
	}else{ // ไม่พบ User ในระบบ
	
				$Auth->user_invalid();
				SaveLog($Auth->logData,'FAIL');
		
	} // End if (count($chk_user)>0)
		
	
?>

<script language="javascript" type="text/javascript">
	
	$(function(){
			
	$("#toLogin").button({
      icons: {
        primary: "ui-icon-arrowreturnthick-1-w"
      }
    }).click(function(){
				get("./modules/Login/dialog_Login.php" ,"diag_login_detail");
			});
			
	
	$("#toHome").button({
      icons: {
        primary: "ui-icon-home"
      }
    }).click(function(){
				//get("./modules/Login/dialog_Login.php" ,"diag_login_detail");
				window.location = 'index.php';
			});
			
			
	$("#pass_expire1").button({
      icons: {
        primary: "ui-icon-key"
      }
    }).click(function(){
				window.location='modules.php?name=Login&op=chgpass';
			});
			
	
	$("#pass_expire2").button({
      icons: {
        primary: "ui-icon-key"
      }
    }).click(function(){
				window.open('http://eim.cattelecom.com','emp_win','');
				window.location = 'modules.php?name=Login&op=Logout';
			});
			
			
	});
	
	
</script>
