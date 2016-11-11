	<link rel="stylesheet" href="./includes/model-message/css/modal-message.css" type="text/css">
	<script type="text/javascript" src="./includes/model-message/js/ajax.js"></script>
	<script type="text/javascript" src="./includes/model-message/js/modal-message.js"></script>
	<script type="text/javascript" src="./includes/model-message/js/ajax-dynamic-content.js"></script>

    <script type="text/javascript">
messageObj = new DHTML_modalMessage();	// We only create one object of this class
messageObj.setShadowOffset(5);	// Large shadow


function displayMessage(url)
{
	
	messageObj.setSource(url);
	messageObj.setCssClassMessageBox(false);
	messageObj.setSize(450,220);
	messageObj.setShadowDivVisible(true);	// Enable shadow for these boxes
	messageObj.display();
}

function displayStaticMessage(messageContent,cssClass)
{
	messageObj.setHtmlContent(messageContent);
	messageObj.setSize(200,100);
	messageObj.setCssClassMessageBox(cssClass);
	messageObj.setSource(false);	// no html source since we want to use a static message here.
	messageObj.setShadowDivVisible(false);	// Disable shadow for these boxes	
	messageObj.display();
	
	
}

function closeMessage()
{
	messageObj.close();	
}


</script>
<?php
 if (!defined('MODULE_FILE')) {
 	die ("You can't access this file directly...");
 }

 require_once("mainfile.php");
 include("includes/ipban.php");
 $module_name = basename(dirname(__FILE__));  //ชื่อ module


//มองภาษาปัจจุบัน  global $currentlang  และจะ  @include_once("modules/$module/language/lang-".$language.".php");
 get_lang($module_name);


 $ThemeSel = get_theme();
// echo $ThemeSel;

 
 include("header.php");




function main()
{
	if(isset($_SESSION['usr'])){
		pageBack("index.php","");
	}
	
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;

	OpenTable();  

	?>


<form action = "modules.php?name=Login2&op=checkLogin" method = "post" name="login" id="login">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><br />
<script language = "javascript">
		function check()
		{
			if (login.username.value == "")
			{
				alert ('กรุณาป้อน Username');
				login.username.focus();
			}else if(login.password.value == "")
			{
				alert ('กรุณาป้อน Password');
				login.password.focus();
			}else
			{
				login.submit();	
				//checkLogin("username="+document.getElementById('username').value+"&password="+document.getElementById('password').value,"divCheckLogin");
				
			}
		}
		function check_enter()
			{
				if (window.event.keyCode == 13)
				{
					check();
				}
			}
		function next_enter()
			{
				if (window.event.keyCode == 13)
				{
					login.password.focus();
				}
			}
      function changepwd()
	  {
		  window.location = "modules.php?name=Login&op=chgpass";
	  }
	</script>
	
<? OpenTable(); ?>

	
    
<table width="51%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" align="left" width="5">&nbsp;</td>
      <td width="269" align="left" valign="top"><strong class="style1"><br />
            <span class="button_bg">Login to BIS..</span></strong></td>
      <td width="203" align="right" valign="middle">&nbsp;</td>
      <td valign="top" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" align="left"></td>
      <td valign="top" align="left" colspan="2"></td>
      <td valign="top" align="left" width="8"></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="center"><table width="100%"  border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="0">
        <tr>
          <td width="16%" rowspan="4" valign="top"><strong class="style1"><img src="images/keylogin.gif" width="41" height="47" /></strong></td>
          <td width="41%" class="content">Username : </td>
          <td width="43%" rowspan="4" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><input name="username" type="text" class="formbutton" id="username" title="ชื่อผู้ใช้งาน" onkeypress = "next_enter()" /></td>
        </tr>
        <tr>
          <td class="content">Password : </td>
        </tr>
        <tr>
          <td><input name="password" type="password" class="formbutton" id="password" title="รหัสผ่าน" onkeypress = "check_enter()" /></td>
        </tr>
        <tr>
          <td height="33" valign="top">&nbsp;</td>
          <td colspan="2">
          <div id="divCheckLogin"></div>
          <input name="Login" type="button" class="formbutton" id="Login" onclick = "check()" value="      Login      " style="cursor:pointer;font-weight:bold" title="เข้าสู่ระบบ"  />
                <input name="Login" type="button" class="formbutton" onclick = "changepwd()" value="Change Password" style="cursor:pointer;font-weight:bold" title="เปลี่ยนรหัสผ่าน" />
                <label></label></td>
        </tr>
      </table>
          <br />
      </td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" align="left" width="5"></td>
      <td colspan="2" align="left" valign="top"></td>
      <td valign="top" align="left" width="8"></td>
    </tr>

	
</table>
<? 	CloseTable(); ?>
<br />

  </td>
  </tr>
  <tr>
    <td align="center"><font 
face="Tahoma" size ="2" color = "blue">* สำหรับผู้ที่มีสิทธิใช้ระบบสารสนเทศทางธุรกิจเท่านั้นที่สามารถใช้ Username และ Password ที่อ้างอิงมาจาก User ของ E-mail  กสท. ตัวอย่างเช่น Username ใน E-mail ของ กสท. คือ   abc.d@cattelecom.com   ดังนั้น Username และ Password ที่เข้าใช้งานคือ abc.d เหมือนกัน และระบบจะบังคับให้มีการเปลี่ยน Password ใหม่ทุก 3 เดือน <br />
ผู้ใช้งานกรุณาเปลี่ยน Password ด้วยตนเอง ตามระยะเวลาที่กำหนด <br /></font>
<!-- <b><font face="Tahoma" size ="2" color = "#0000ff"> * ยกเว้นผู้มีสิทธิใช้ระบบงาน Statregion ยังคงใช้ Username และ Password เดิม</b>--></td>
  </tr>
</table>
</form>
<script language="javascript" type="text/javascript">
	document.getElementById("username").focus();
</script>


	<?
	CloseTable();

}


function chgpass(){
if(isset($_SESSION['usr'])){
	pageBack("modules.php?name=Login&op=chgpassLogin","");
}
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;

	OpenTable();  
?>
<script language="javascript">
function savepass()
{
	if (frmchgp.txtusr.value == 'cattelecom')
	{
			alert("User cattelecom ไม่สามารถเปลี่ยนแปลง Password ได้");
	}else
	{
		if (frmchgp.txtusr.value == "")
		{
			alert("กรุณาใส่ User Name");
			frmchgp.txtusr.focus();
		}
		else if (frmchgp.txtold.value == "")
		{
			alert("กรุณาใส่ Old Password");
			frmchgp.txtold.focus();
		}
		else if (frmchgp.txtnew.value == "")
		{
			alert("กรุณาใส่ New Password");
			frmchgp.txtnew.focus();
		}
		else if (frmchgp.txtnew1.value == "")
		{
			alert("กรุณา Confrim Password");
			frmchgp.txtnew1.focus();
		}
		else if (frmchgp.txtold.value == frmchgp.txtnew.value)
		{
			alert("ไม่สามารถเปลี่ยนได้ เนื่องจาก Password ซ้ำกับตัวเดิม");
		}else
			{
			if (frmchgp.txtnew.value == frmchgp.txtnew1.value)
			{	
			//tmp='savepass.php?opass='+frmchgp.txtold.value+'&npass='+frmchgp.txtnew.value+'&usr='+frmchgp.txtusr.value;
			//self.location = tmp;
					if(confirm('ยืนยัน !! ต้องการเปลี่ยนแปลงข้อมูล ใช่ หรือ ไม่ ?')){			
							document.frmchgp.submit();
					}else{
							return false;
					}
			}
			else
				{
					alert("กรุณา Confirm Password อีกครั้ง");
					frmchgp.txtnew1.value = "";
					frmchgp.txtnew1.focus();
				}

		}
	}
}
</script>

<FORM name = "frmchgp" METHOD="POST" ACTION="modules.php?name=Login&op=savepass">
<TABLE width="100%" cellpadding="1" cellspacing="1">
<tr>
                              <td height="25" colspan='2' background="./images/grid-hrow.gif" bgcolor="#FFFFCC"  class=head><center><b>เปลี่ยนรหัสผ่าน</b>
                                                                              </center></td>
    </tr>                           
                            
                            <TR>
                                <TD colspan="2"  class=unit>

                              <p align="right">&nbsp;</p>                              </TD>
    </TR>
                            <TR>
                                <td width="131" class="unit">

                              <p align="right"><b>ชื่อผู้ใช้งาน :</b></p>                              </td>
                              <td width="819">&nbsp;
                              <INPUT TYPE="text" NAME="txtusr"></td>
    </TR>
                            <TR>
                                <TD width="131"  class=unit>

                              <p align="right"><b>รหัสผ่านเดิม :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtold"></TD>
    </TR>
                            <TR>
                                <TD width="131" class=unit>

                              <p align="right"><b>รหัสผ่านใหม่ :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtnew"></TD>
    </TR>
                            <TR>
                                <TD width="131"  class=unit>

                              <p align="right"><b>ยืนยันรหัสผ่าน :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtnew1"></TD>
    </TR>
                            <TR>
                                <td height="35">&nbsp;</td>
                            <td>&nbsp;
                          <input name="button" type="button" onclick=savepass(); value="Change" style="cursor:pointer;" />
                                  &nbsp;
                              <input name="reset" type="reset" onClick="window.location='index.php'; " value="Cancel";  style="cursor:pointer;" /></td></TR>
                            <TR>
                              <td colspan="2">&nbsp;</td>
                            </TR>
  </TABLE>
</FORM>

<?
	CloseTable();
}


function chgpassLogin(){
	global $prefix, $db, $dbOra , $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;

if(!isset($_SESSION['usr'])){
	pageBack("modules.php?name=Login","");
}

$sqlEditProfile = "SELECT USER_DESC , PASSWORD , EMAIL , TELEPHONE FROM USER_LOGIN WHERE USERNAME='".$_SESSION['usr']."'";
$rsEditProfile = $dbOra -> GetRow($sqlEditProfile);


	OpenTable();  
?>
<script language="javascript">
function savepassLogin(){

	 if(frmchgp.txtuserdesc.value == "")	{
			alert("กรุณาใสชื่อ-สกุลผู้ใช้งาน");
			frmchgp.txtuserdesc.focus();
			return false;
	}else if(frmchgp.txtold.value == "")	{
			alert("กรุณาใส่รหัสผ่านเดิม");
			frmchgp.txtold.focus();
			return false;
	}else if(frmchgp.txtold.value != "<?=base64_decode($_SESSION['password'])?>")	{
			alert("กรอกรหัสผ่านเดิมไม่ถูกต้อง");
			frmchgp.txtold.focus();
			return false;
	}else if (frmchgp.txtnew.value == "")	{
			alert("กรุณาใส่รหัสผ่านใหม่");
			frmchgp.txtnew.focus();
			return false;
	}	else if (frmchgp.txtnew1.value == "")	{
			alert("กรุณาใส่ยืนยันรหัสผ่าน");
			frmchgp.txtnew1.focus();
			return false;
	}	else if (frmchgp.txtemail.value == "")	{
			alert("กรุณาใส่เบอร์อีเมล์");
			frmchgp.txtemail.focus();
			return false;
	}else if (frmchgp.txttelephone.value == "")	{
			alert("กรุณาเบอร์โทรศัพท์ที่สามารถติดต่อได้์");
			frmchgp.txttelephone.focus();
			return false;
	}	else if (frmchgp.txtold.value == frmchgp.txtnew.value){
			alert("ไม่สามารถเปลี่ยนได้ เนื่องจาก Password ซ้ำกับตัวเดิม");
			frmchgp.txtnew1.focus();
			return false;
	}else{

			if(confirm('ยืนยัน !! ต้องการเปลี่ยนแปลงข้อมูล ใช่ หรือ ไม่ ?')){			
							document.frmchgp.submit();
			}else{
					return false;
			}
	}
			

}
</script>

<FORM name = "frmchgp" METHOD="POST" ACTION="modules.php?name=Login&op=savepassLogin">
  <table width="100%" cellpadding="1" cellspacing="1">
    <tr>
      <td height="25" colspan='2' background="./images/grid-hrow.gif" bgcolor="#FFFFCC"  class=head><center>
        <b>เปลี่ยนรหัสผ่าน</b>
      </center></td>
    </tr>
    <tr>
      <td colspan="2"  class=unit><p align="right">&nbsp;</p></td>
    </tr>
    <tr>
      <td align="right"  class=unit><b>ชื่อ - สกุล ผู้ใช้งาน :</b></td>
      <td>&nbsp;
          <input name="txtuserdesc" type="text" id="txtuserdesc" size="40" value="<?=$rsEditProfile['USER_DESC']?>" /></td>
    </tr>
    <tr>
      <td width="185"  class=unit><p align="right"><b>รหัสผ่านเดิม :</b></p></td>
      <td width="758">&nbsp;
          <input type="password" name="txtold2" /></td>
    </tr>
    <tr>
      <td width="185" class=unit><p align="right"><b>รหัสผ่านใหม่ :</b></p></td>
      <td width="758">&nbsp;
          <input type="password" name="txtnew2" /></td>
    </tr>
    <tr>
      <td width="185"  class=unit><p align="right"><b>ยืนยันรหัสผ่าน :</b></p></td>
      <td width="758">&nbsp;
          <input type="password" name="txtnew2" /></td>
    </tr>
    <tr>
      <td height="35" align="right"><b>อีเมล์ :</b></td>
      <td>&nbsp;
          <input name="txtemail" type="text" id="txtemail" size="40"  value="<?=$rsEditProfile['EMAIL']?>"  />
          <span style="color:#FF0000"> * เป็น Email ของ กสท. เท่านั้น</span> </td>
    </tr>
    <tr>
      <td height="35" align="right"><b>เบอร์โทรที่ติดต่อได้ :</b></td>
      <td>&nbsp;
          <input name="txttelephone" type="text" id="txttelephone" size="20"  value="<?=$rsEditProfile['TELEPHONE']?>"  /></td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;
          <input name="button3" type="button" onclick="savepassLogin();" value="Change"  style="cursor:pointer;" />
        &nbsp;
        <input name="reset2" type="reset" onclick="window.location='index.php'; " value="Cancel"  style="cursor:pointer;"; /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</FORM>

<?
	CloseTable();
}


function checkLogin()
{
	global $prefix, $db, $dbOra ,  $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
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
			
			
			
			########################################################
			#### Save log File to /var/log/bis
			$logData = "Login ,".date('Y/m/d h:i:s A').",".$username.",".$_SERVER['REMOTE_ADDR']."\n";
			
			SaveLog($logData,'SUCCESS');
			
			########################################################			
		
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
				//alert  ("Username หรือ Password ไม่ถูกต้อง");
				//window.location = "http://bis.cattelecom.com/";
				displayStaticMessage('./modules/Login2/Access_Denied.html');
			
				//window.location = "modules.php?name=Login2";
			</script>
		<?
	}
}

function savepass(){
	global $prefix, $db, $dbOra , $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2; 

	include("conora.php");
	
	$today = date("d/m/Y");
	//$exdate = date("d/m/Y",strtotime("+90 day"));
	$exdate = getTime();
	
	$cmdstr = "select  username,password,org_code  from user_login where username ='".$_POST['txtusr']."'  and password = '".base64_encode($_POST['txtold'])."' ";

	$result  = $dbOra ->getAll($cmdstr);	
    $nrows = count($result);


	if  ($nrows == 1 )	{
		$sql = "UPDATE user_login 
		        		SET PASSWORD ='".base64_encode($_POST['txtnew'])."',
							   CHANGE_DATE =TO_DATE('".$today."','DD/MM/YYYY'),
							   EXPIRE_DATE = TO_DATE('".$exdate."','DD/MM/YYYY')
							   WHERE username ='".$_POST['txtusr']."'";
		$dbOra -> Execute($sql); 
		
		########################################################
			#### Save log File to /var/log/bis
			$logData = "Logout , ".date('Y/m/d h:i:s A').",".$_SESSION['usr'].",".$_SERVER['REMOTE_ADDR']."\n";
			
			SaveLog($logData,'SUCCESS');
			
						
				unset($_SESSION['usr']);	
				unset($_SESSION['desc']);
				unset($_SESSION['p']);
				unset($_SESSION['level']);
				unset($_SESSION['s']);
				unset($_SESSION['d']);
				unset($_SESSION['mlevel']);
				unset($_SESSION['org']);
				unset($_SESSION['userid']);
				unset($_SESSION['klevel']);
				unset($_SESSION['mlevels']);	
				unset($_SESSION['password']);
				unset($_SESSION['pass_dw']);
				unset($_SESSION['email']);
				unset($_SESSION['status']);
				unset($_SESSION['lastlogin']);
				unset($_SESSION['telephone']);
				unset($_SESSION['randText']);
				
			pageBack("modules.php?name=Login","รหัสผ่านได้ถูกแก้ไขแล้วกรุณาทำการ Login ใหม่");
		
}else {  // nrows <> 1
			//echo "ชื่อหรือรหัสผ่านไม่ถูกต้อง";
			pageBack("modules.php?name=Login&op=chgpass","ชื่อหรือรหัสผ่านไม่ถูกต้อง");
			
	}  // end $nrows = 1



}

#==========================================================================#
function savepassLogin(){
	global $prefix, $db, $dbOra , $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2; 
		
	$today = date("d/m/Y");
	//$exdate = date("d/m/Y",strtotime("+90 day"));
	$exdate = getTime();
	
		 $sqlChgPass = "UPDATE user_login 
						SET PASSWORD ='".base64_encode($_POST['txtnew'])."' ,
							   CHANGE_DATE =TO_DATE('".$today."','DD/MM/YYYY'),
							   EXPIRE_DATE = TO_DATE('".$exdate."','DD/MM/YYYY'),
							   EMAIL = '".$_POST['txtemail']."' ,
							   TELEPHONE = '".$_POST['txttelephone']."'
						WHERE username ='".$_SESSION['usr']."'";
						
		$dbOra -> Execute($sqlChgPass);

			$sqlStat = "UPDATE count_log SET LOGOUT_TIME = TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam') WHERE USERNAME = '".$_SESSION['usr']."' AND  SESSION_ID ='".$_SESSION['randText']."' ";
	
		    $dbOra -> Execute($sqlStat);
				
						########################################################
			#### Save log File to /var/log/bis
			$logData = "Logout , ".date('Y/m/d h:i:s A').",".$_SESSION['usr'].",".$_SERVER['REMOTE_ADDR']."\n";
			
			SaveLog($logData,'SUCCESS');
				
				unset($_SESSION['usr']);	
				unset($_SESSION['desc']);
				unset($_SESSION['p']);
				unset($_SESSION['level']);
				unset($_SESSION['s']);
				unset($_SESSION['d']);
				unset($_SESSION['mlevel']);
				unset($_SESSION['org']);
				unset($_SESSION['userid']);
				unset($_SESSION['klevel']);
				unset($_SESSION['mlevels']);	
				unset($_SESSION['password']);
				unset($_SESSION['pass_dw']);
				unset($_SESSION['email']);
				unset($_SESSION['status']);
				unset($_SESSION['lastlogin']);
				unset($_SESSION['telephone']);
				unset($_SESSION['randText']);
				
		pageBack("modules.php?name=Login","รหัสผ่านได้ถูกแก้ไขแล้วกรุณาทำการ Login ใหม่");		


}

function Logout()
{
	global $prefix, $db, $dbOra ,  $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	
		$sqlStat = "UPDATE count_log SET LOGOUT_TIME = TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam') WHERE USERNAME = '".$_SESSION['usr']."' AND  SESSION_ID ='".$_SESSION['randText']."' ";
	
		$dbOra -> Execute($sqlStat);
		
				########################################################
			#### Save log File to /var/log/bis
			$logData = "Logout , ".date('Y/m/d h:i:s A').",".$_SESSION['usr'].",".$_SERVER['REMOTE_ADDR']."\n";
			
			SaveLog($logData,'SUCCESS');
		
	unset($_SESSION['usr']);	
	unset($_SESSION['desc']);
	unset($_SESSION['p']);
	unset($_SESSION['level']);
	unset($_SESSION['s']);
	unset($_SESSION['d']);
	unset($_SESSION['mlevel']);
	unset($_SESSION['org']);
	unset($_SESSION['userid']);
	unset($_SESSION['klevel']);
	unset($_SESSION['mlevels']);	
	unset($_SESSION['password']);
	unset($_SESSION['pass_dw']);
	unset($_SESSION['email']);
	unset($_SESSION['status']);
	unset($_SESSION['lastlogin']);
	unset($_SESSION['telephone']);
	unset($_SESSION['randText']);

	
	pageBack("index.php","");
/*
	echo '<script language = javascript>'; 			
	echo '	location.href = "index.php";'; 
	echo '</script>'; 
	*/
}



switch($op) { // เปิด $op จาก GET ได้เลย

	default:
		main();
	break;

	case "checkLogin":
		checkLogin();
	break;
	
	case "chgpass":
		chgpass();
	break;
	
	case "chgpassLogin":
		chgpassLogin();
	break;
	
	case "savepass":
		savepass();
	break;	
	
	case "savepassLogin":
		savepassLogin();
	break;	
	
	case "Logout";
		Logout();
	break;


}


include("footer.php"); 
?>
  

