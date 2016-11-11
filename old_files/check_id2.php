<?
	session_start();


	include("./includes/custom_files/functions.php");
	include("./includes/custom_files/dbConnect.php");
	$dbOra  -> debug= false;
	
	$dates =  strtoupper(date("d-M-y"));
	 $sqlLogin = "SELECT USER_DESC,
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
								   TELEPHONE
					  FROM USER_LOGIN
					 WHERE 
					 			USERNAME = '".$_POST['username']."' 
								AND PASSWORD = '".base64_encode($_POST['password'])."' " ;

	$rsLogin = $dbOra -> GetRow($sqlLogin);

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
	$telephone        = $rsLogin['TELEPHONE']; // telephone




	if ($plevel != "")	{
	 $sqlCount = "SELECT *
  							   FROM USER_LOGIN
 							   WHERE 
							   				USERNAME  = '".$_POST['username']."'  AND PASSWORD = '".base64_encode($_POST['password'])."' 
											AND EXPIRE_DATE >= '$dates'";	

	$rsCount =  $dbOra -> getAll($sqlCount);
	
	 $counts = count($rsCount);
	
	// กรณีที่ระงับสิทธิืการใช้งาน
	if($status == "0"){
	//echo "<span style=\"color:red; font-weight:bold\">มีข้อผิดพลาด !! ชื่อผู้ใช้งานนี้ถูกระงับสิทธิ์การใช้งานชั่วคราว โปรดติดต่อผู้ดูแลระบบ โทร 7332-4</span>";
	//exit;
	?>
    <script language = "javascript" type="text/javascript">
				alert  ("มีข้อผิดพลาด !! ชื่อผู้ใช้งานนี้ถูกระงับสิทธิ์การใช้งานชั่วคราว โปรดติดต่อผู้ดูแลระบบ โทร 7332-4");	
				window.location = "index.php";	
						
	</script>
    <?
	}
 // End กรณีที่ระงับสิทธิืการใช้งาน
 

		if ($counts != 0 && $status != "0"){		
			
			$randText =  random_gen(30);
			
		 	$sqlStat = "INSERT INTO count_log VALUES('$username','$emp','$orgcode',TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam'),'".$_SERVER['REMOTE_ADDR']."', null,'".$randText."')";
		
			$dbOra -> Execute($sqlStat);
			
			
			$_SESSION['randText'] = $randText ;
			
			$Now = date('d-m-Y');


/*if (file_exists("./includes/custom_files/dbConnect.php")) {
		include("./includes/custom_files/dbConnect.php");
}*/

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
			
			
			$sqlUpdateStat1 = "UPDATE USERS_STAT SET STAT_TOTAL  =  $hitsToday  WHERE STAT_NAME = 'TODAY' ";
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
			
			
			 $sqlLastLogin = "UPDATE user_login SET LAST_LOGIN = TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam')  WHERE USERNAME = '".$_POST['username']."'";
			
			$dbOra -> Execute($sqlLastLogin);
			
		
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
		
		?>
			<script language = "javascript">
						window.location = "index.php";
			</script>
			<?
		}else
		{
		?>
			<script language = "javascript">
				alert  ("Password หมดอายุ กรุณาเปลี่ยน Password ใหม่");
			//	window.location = "index1.php";
				window.location = "modules.php?name=Login&op=chgpass";
			</script>
		<?
		}
	}else
	{
		?>
			<script language = "javascript">
				alert  ("Username หรือ Password ไม่ถูกต้อง");
//				window.location = "index1.php";
				window.location = "modules.php?name=Login";
			</script>
		<?
	}
		
			/*
			echo "<script language = \"javascript\">";
			echo "sendUrl('index.php')";
			echo "</script>";

		}else	{
			echo "<span style=\"color:red; font-weight:bold\">Password หมดอายุ กรุณาเปลี่ยน Password ใหม่</span>";		
			exit;	
		}
		
	}else	{
	echo "<span style=\"color:red; font-weight:bold\">Username หรือ Password ไม่ถูกต้อง</span>";
		
	}
	*/
?>
