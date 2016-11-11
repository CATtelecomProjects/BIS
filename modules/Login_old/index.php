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

	?><style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>


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
                                <TD colspan="2">

                              <p align="right">&nbsp;</p>                              </TD>
    </TR>
                            <TR>
                                <td width="131" class="unit">

                              <p align="right"><b>ชื่อผู้ใช้งาน :</b></p>                              </td>
                              <td width="819">&nbsp;
                              <INPUT TYPE="text" NAME="txtusr"></td>
    </TR>
                            <TR>
                                <TD width="131">

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
                                <TD width="131">

                              <p align="right"><b>ยืนยันรหัสผ่าน :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtnew1"></TD>
    </TR>
                            <TR>
                                <td height="35">&nbsp;</td>
                            <td>&nbsp;
                              <input name="button" type="button" onclick=savepass(); value="เปลี่ยนแปลงข้อมูล" style="cursor:pointer;" />
                              &nbsp;
    <input name="reset" type="reset" onClick="window.location='index.php'; " value="  ยกเลิก  ";  style="cursor:pointer;" /></td></TR>
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

//$sqlEditProfile = "SELECT USER_DESC , PASSWORD , EMAIL , TELEPHONE , FORGOT_QUESTION , FORGOT_ANSWER FROM USER_LOGIN WHERE USERNAME='".$_SESSION['usr']."' AND EMP_ID = '".$_SESSION['userid']."' ";
$sqlEditProfile = "SELECT USER_DESC , PASSWORD , EMAIL , TELEPHONE  FROM USER_LOGIN WHERE USERNAME='".$_SESSION['usr']."' AND EMP_ID = '".$_SESSION['userid']."' ";
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
			alert("กรุณาใส่เบอร์โทรศัพท์ที่สามารถติดต่อได้์");
			frmchgp.txttelephone.focus();
			return false;
	}else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(frmchgp.txtemail.value)== false){
			alert("รูปแบบของอีเมล์ไม่ถูกต้อง");
			frmchgp.txtemail.focus();
			return false;
	
	}	else if (frmchgp.txtold.value == frmchgp.txtnew.value){
			alert("ไม่สามารถเปลี่ยนได้ เนื่องจาก Password ซ้ำกับตัวเดิม");
			frmchgp.txtnew1.focus();
			return false;
	/*}else if (frmchgp.forgot_answer.value == "")	{
			alert("กรุณาใส่คำตอบ-คำถามกันลืม");
			frmchgp.forgot_answer.focus();
			return false;
	*/
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
      <td colspan="2"><p align="right">&nbsp;</p></td>
    </tr>
    <tr>
      <td width="24%" align="right"><b>ชื่อ - สกุล ผู้ใช้งาน :</b></td>
<td width="76%">&nbsp;
      <input name="txtuserdesc" type="text" id="txtuserdesc" size="40" value="<?=$rsEditProfile['USER_DESC']?>" /></td>
    </tr>
    <tr>
      <td align="right"><b>รหัสผ่านเดิม :</b></td>
  <td>&nbsp;
      <input type="password" name="txtold" id="txtold" /></td>
    </tr>
    <tr>
      <td align="right" class=unit><b>รหัสผ่านใหม่ :</b></td>
  <td>&nbsp;
      <input type="password" name="txtnew" id="txtnew" /> 
      <span style="color:#339933; font-size:11px">* รหัสผ่านห้ามมีเครื่องหมาย +</span></td>
    </tr>
    <tr>
      <td align="right"><b>ยืนยันรหัสผ่าน :</b></td>
  <td>&nbsp;
      <input type="password" name="txtnew1" id="txtnew1" /></td>
    </tr>
    <tr>
      <td height="24" align="right"><b>อีเมล์ :</b></td>
      <td>&nbsp;
          <input name="txtemail" type="text" id="txtemail" size="40"  value="<?=$rsEditProfile['EMAIL']?>"  />
          <span style="color:#FF0000; font-size:11px"> * เป็น Email ที่มีอยู่จริงและเป็น Email ของ กสท. เท่านั้น</span> </td>
    </tr>
    <tr>
      <td height="24" align="right"><b>เบอร์โทรที่ติดต่อได้ :</b></td>
      <td>&nbsp;
          <input name="txttelephone" type="text" id="txttelephone" size="20"  value="<?=$rsEditProfile['TELEPHONE']?>"  /></td>
    </tr>
   
   <!--
    <tr>
      <td height="25" align="right"><b>เลือกประเภทคำถามกันลืม :</b></td>
      <td><span class="content" style="color:#006600;font-weight:bold">
        &nbsp;
        <select name="forgot_question" title="เลือกคำถาม">
          <option value="1" <?=$rsEditProfile['FORGOT_QUESTION']=="1"?"selected":""?>>วันที่คุณเริ่มทำงานที่ กสท</option>
          <option value="2" <?=$rsEditProfile['FORGOT_QUESTION']=="2"?"selected":""?>>ตำแหน่งแรกที่คุณได้ทำงานใน กสท</option>
          <option value="3" <?=$rsEditProfile['FORGOT_QUESTION']=="3"?"selected":""?>>ชื่อสัตว์เลี้ยงที่คุณชอบ</option>
          <option value="4" <?=$rsEditProfile['FORGOT_QUESTION']=="4"?"selected":""?>>ทะเบียนรถ+บ้านเลขที่</option>
          <option value="5" <?=$rsEditProfile['FORGOT_QUESTION']=="5"?"selected":""?>>ยี่ห้อรถ+สีที่คุณอยากได้</option>
        </select>
        <span style="color:#FF0000">*</span></span></td>
    </tr>
    <tr>
      <td height="24" align="right"><b>คำตอบ :</b></td>
      <td>&nbsp;
        <input name="forgot_answer" type="text" id="forgot_answer" size="40"  value="<?=base64_decode($rsEditProfile['FORGOT_ANSWER'])?>"  />
      <span style="color:#FF0000">*</span></td>
    </tr>
    
    -->
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;
          <input name="button3" type="button" onclick="savepassLogin();" value="เปลี่ยนแปลงข้อมูล"  style="cursor:pointer;" />
        &nbsp;
        <input name="reset2" type="reset" onclick="window.location='index.php'; " value="  ยกเลิก   "  style="cursor:pointer;"; /></td>
    </tr>
    <tr>
      <td height="70" colspan="2"><span style="color:#FF0000; font-size:11px"><b>&nbsp;&nbsp;<img src="./images/icon-warning.gif" width="16" height="16" align="absmiddle" /> &nbsp;* หมายเหตุ ?<br />
      </b>&nbsp;
&nbsp;- ระบบจะทำการส่งรหัสผ่านและข้อมูลผู้ใช้งานตามที่อยู่ E-Mail ที่ผู้ใช้งานระบุไว้เท่านั้น <br />
&nbsp;- กรุณาตรวจสอบให้แน่ใจว่าเป็นอีเมล์ที่มีอยู่จริง และต้องเป็น E-Mail ของ กสท. เท่านั้นเนื่องจากระบบ ไม่สามารถส่งเมล์ไปยัง Mail Box อื่นๆได้</span></td>
    </tr>
  </table>
</FORM>

<?
	CloseTable();
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
			$logData = "Logout , ".date('Y/m/d h:i:s A').",".$_SESSION['usr'].",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
			
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
				unset($_SESSION['password_expire']);
				unset($_SESSION['username_dw']);
			pageBack("index.php","รหัสผ่านได้ถูกแก้ไขแล้ว! \\nเวลาในการแก้ไขรหัสผ่านครั้งต่อไป คือ ".datethai($exdate,"full")." \\nกรุณาทำการ Login ใหม่");
		
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
	/*
		 $sqlChgPass = "UPDATE user_login 
						SET PASSWORD ='".base64_encode($_POST['txtnew'])."' ,
							   CHANGE_DATE =TO_DATE('".$today."','DD/MM/YYYY'),
							   EXPIRE_DATE = TO_DATE('".$exdate."','DD/MM/YYYY'),
							   EMAIL = '".$_POST['txtemail']."' ,
							   TELEPHONE = '".$_POST['txttelephone']."' , 
							   FORGOT_QUESTION = '".$_POST['forgot_question']."' , 
							   FORGOT_ANSWER = '".base64_encode($_POST['forgot_answer'])."' 						
						WHERE username ='".$_SESSION['usr']."' AND EMP_ID = '".$_SESSION['userid']."' ";
		*/				
		
		 $sqlChgPass = "UPDATE user_login 
						SET PASSWORD ='".base64_encode($_POST['txtnew'])."' ,
							   CHANGE_DATE =TO_DATE('".$today."','DD/MM/YYYY'),
							   EXPIRE_DATE = TO_DATE('".$exdate."','DD/MM/YYYY'),
							   EMAIL = '".$_POST['txtemail']."' ,
							   TELEPHONE = '".$_POST['txttelephone']."'				
						WHERE username ='".$_SESSION['usr']."' AND EMP_ID = '".$_SESSION['userid']."' ";
		$dbOra -> Execute($sqlChgPass);

			$sqlStat = "UPDATE count_log SET LOGOUT_TIME = TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam') WHERE USERNAME = '".$_SESSION['usr']."' AND  SESSION_ID ='".$_SESSION['randText']."' ";
	
		    $dbOra -> Execute($sqlStat);
				
						########################################################
			#### Save log File to /var/log/bis
			$logData = "Logout , ".date('Y/m/d h:i:s A').",".$_SESSION['usr'].",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
			
			SaveLog($logData,'SUCCESS');
			
			
			/***********************  Send User Infomation E-Mail VIA****************************/
			/*
			$sql = "SELECT 
								EMP_ID , USERNAME , USER_DESC , PASSWORD , EMAIL , PLEVEL , TELEPHONE , to_char(LAST_LOGIN,'dd-mm-yyyy hh:mi:ssam') as LAST_LOGIN , to_char(EXPIRE_DATE,'dd-mm-yyyy hh:mi:ssam') as EXPIRE_DATE , FORGOT_QUESTION , FORGOT_ANSWER
					FROM USER_LOGIN 
						WHERE username ='".$_SESSION['usr']."' AND EMP_ID = '".$_SESSION['userid']."' ";
			*/
			$sql = "SELECT 
								EMP_ID , USERNAME , USER_DESC , PASSWORD , EMAIL , PLEVEL , TELEPHONE , to_char(LAST_LOGIN,'dd-mm-yyyy hh:mi:ssam') as LAST_LOGIN , to_char(EXPIRE_DATE,'dd-mm-yyyy hh:mi:ssam') as EXPIRE_DATE , PASS_DW
					FROM USER_LOGIN 
						WHERE username ='".$_SESSION['usr']."' AND EMP_ID = '".$_SESSION['userid']."' ";
			$rsData =  $dbOra -> GetRow($sql);
			sendMail($rsData,  'notShowMsg');
			/***************************************************************************/
			
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
				unset($_SESSION['password_expire']);
				unset($_SESSION['username_dw']);
				
		pageBack("index.php","ข้อมูลผู้ใช้งานระบบได้ถูกแก้ไขแล้ว! \\nข้อมูลผู้ใช้งานระบบได้ส่งไปที่อีเมล์ : ".$rsData['EMAIL']."  \\nเวลาในการแก้ไขรหัสผ่านครั้งต่อไป คือ ".datethai($exdate,"full")." \\nกรุณาทำการ Login ใหม่");


}

function Logout()
{
	global $prefix, $db, $dbOra ,  $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	
		$sqlStat = "UPDATE count_log SET LOGOUT_TIME = TO_DATE('".date('Y/m/d h:i:s A')."' ,'yyyy/mm/dd:hh:mi:ssam') WHERE USERNAME = '".$_SESSION['usr']."' AND  SESSION_ID ='".$_SESSION['randText']."' ";
	
		$dbOra -> Execute($sqlStat);
		
				########################################################
			#### Save log File to /var/log/bis
			$logData = "Logout , ".date('Y/m/d h:i:s A').",".$_SESSION['usr'].",".$_SERVER['REMOTE_ADDR'].",".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
			
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
	unset($_SESSION['password_expire']);
	unset($_SESSION['username_dw']);
	
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
  

