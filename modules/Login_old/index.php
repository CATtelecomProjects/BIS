<?php
 if (!defined('MODULE_FILE')) {
 	die ("You can't access this file directly...");
 }

 require_once("mainfile.php");
 include("includes/ipban.php");
 $module_name = basename(dirname(__FILE__));  //���� module


//�ͧ���һѨ�غѹ  global $currentlang  ��Ш�  @include_once("modules/$module/language/lang-".$language.".php");
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
				alert ('��سһ�͹ Username');
				login.username.focus();
			}else if(login.password.value == "")
			{
				alert ('��سһ�͹ Password');
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
          <td><input name="username" type="text" class="formbutton" id="username" title="���ͼ����ҹ" onkeypress = "next_enter()" /></td>
        </tr>
        <tr>
          <td class="content">Password : </td>
        </tr>
        <tr>
          <td><input name="password" type="password" class="formbutton" id="password" title="���ʼ�ҹ" onkeypress = "check_enter()" /></td>
        </tr>
        <tr>
          <td height="33" valign="top">&nbsp;</td>
          <td colspan="2">
          <div id="divCheckLogin"></div>
          <input name="Login" type="button" class="formbutton" id="Login" onclick = "check()" value="      Login      " style="cursor:pointer;font-weight:bold" title="�������к�"  />
                <input name="Login" type="button" class="formbutton" onclick = "changepwd()" value="Change Password" style="cursor:pointer;font-weight:bold" title="����¹���ʼ�ҹ" />
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
face="Tahoma" size ="2" color = "blue">* ����Ѻ��������Է�����к����ʹ�ȷҧ��áԨ��ҹ�鹷������ö�� Username ��� Password �����ҧ�ԧ�Ҩҡ User �ͧ E-mail  �ʷ. ������ҧ�� Username � E-mail �ͧ �ʷ. ���   abc.d@cattelecom.com   �ѧ��� Username ��� Password ��������ҹ��� abc.d ����͹�ѹ ����к��кѧ�Ѻ����ա������¹ Password ����ء 3 ��͹ <br />
�����ҹ��س�����¹ Password ���µ��ͧ ����������ҷ���˹� <br /></font>
<!-- <b><font face="Tahoma" size ="2" color = "#0000ff"> * ¡��鹼�����Է�����к��ҹ Statregion �ѧ���� Username ��� Password ���</b>--></td>
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
			alert("User cattelecom �������ö����¹�ŧ Password ��");
	}else
	{
		if (frmchgp.txtusr.value == "")
		{
			alert("��س���� User Name");
			frmchgp.txtusr.focus();
		}
		else if (frmchgp.txtold.value == "")
		{
			alert("��س���� Old Password");
			frmchgp.txtold.focus();
		}
		else if (frmchgp.txtnew.value == "")
		{
			alert("��س���� New Password");
			frmchgp.txtnew.focus();
		}
		else if (frmchgp.txtnew1.value == "")
		{
			alert("��س� Confrim Password");
			frmchgp.txtnew1.focus();
		}
		else if (frmchgp.txtold.value == frmchgp.txtnew.value)
		{
			alert("�������ö����¹�� ���ͧ�ҡ Password ��ӡѺ������");
		}else
			{
			if (frmchgp.txtnew.value == frmchgp.txtnew1.value)
			{	
			//tmp='savepass.php?opass='+frmchgp.txtold.value+'&npass='+frmchgp.txtnew.value+'&usr='+frmchgp.txtusr.value;
			//self.location = tmp;
					if(confirm('�׹�ѹ !! ��ͧ�������¹�ŧ������ �� ���� ��� ?')){			
							document.frmchgp.submit();
					}else{
							return false;
					}
			}
			else
				{
					alert("��س� Confirm Password �ա����");
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
                              <td height="25" colspan='2' background="./images/grid-hrow.gif" bgcolor="#FFFFCC"  class=head><center><b>����¹���ʼ�ҹ</b>
                                                                              </center></td>
    </tr>                           
                            
                            <TR>
                                <TD colspan="2">

                              <p align="right">&nbsp;</p>                              </TD>
    </TR>
                            <TR>
                                <td width="131" class="unit">

                              <p align="right"><b>���ͼ����ҹ :</b></p>                              </td>
                              <td width="819">&nbsp;
                              <INPUT TYPE="text" NAME="txtusr"></td>
    </TR>
                            <TR>
                                <TD width="131">

                              <p align="right"><b>���ʼ�ҹ��� :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtold"></TD>
    </TR>
                            <TR>
                                <TD width="131" class=unit>

                              <p align="right"><b>���ʼ�ҹ���� :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtnew"></TD>
    </TR>
                            <TR>
                                <TD width="131">

                              <p align="right"><b>�׹�ѹ���ʼ�ҹ :</b></p>                              </TD>
                              <TD width="819">&nbsp;
                              <INPUT TYPE="password" NAME="txtnew1"></TD>
    </TR>
                            <TR>
                                <td height="35">&nbsp;</td>
                            <td>&nbsp;
                              <input name="button" type="button" onclick=savepass(); value="����¹�ŧ������" style="cursor:pointer;" />
                              &nbsp;
    <input name="reset" type="reset" onClick="window.location='index.php'; " value="  ¡��ԡ  ";  style="cursor:pointer;" /></td></TR>
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
			alert("��س��ʪ���-ʡ�ż����ҹ");
			frmchgp.txtuserdesc.focus();
			return false;
	}else if(frmchgp.txtold.value == "")	{
			alert("��س�������ʼ�ҹ���");
			frmchgp.txtold.focus();
			return false;
	}else if(frmchgp.txtold.value != "<?=base64_decode($_SESSION['password'])?>")	{
			alert("��͡���ʼ�ҹ������١��ͧ");
			frmchgp.txtold.focus();
			return false;
	}else if (frmchgp.txtnew.value == "")	{
			alert("��س�������ʼ�ҹ����");
			frmchgp.txtnew.focus();
			return false;
	}	else if (frmchgp.txtnew1.value == "")	{
			alert("��س�����׹�ѹ���ʼ�ҹ");
			frmchgp.txtnew1.focus();
			return false;
	}	else if (frmchgp.txtemail.value == "")	{
			alert("��س��������������");
			frmchgp.txtemail.focus();
			return false;
	}else if (frmchgp.txttelephone.value == "")	{
			alert("��س�����������Ѿ��������ö�Դ������");
			frmchgp.txttelephone.focus();
			return false;
	}else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(frmchgp.txtemail.value)== false){
			alert("�ٻẺ�ͧ���������١��ͧ");
			frmchgp.txtemail.focus();
			return false;
	
	}	else if (frmchgp.txtold.value == frmchgp.txtnew.value){
			alert("�������ö����¹�� ���ͧ�ҡ Password ��ӡѺ������");
			frmchgp.txtnew1.focus();
			return false;
	/*}else if (frmchgp.forgot_answer.value == "")	{
			alert("��س����ӵͺ-�Ӷ���ѹ���");
			frmchgp.forgot_answer.focus();
			return false;
	*/
	}else{

			if(confirm('�׹�ѹ !! ��ͧ�������¹�ŧ������ �� ���� ��� ?')){			
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
        <b>����¹���ʼ�ҹ</b>
      </center></td>
    </tr>
    <tr>
      <td colspan="2"><p align="right">&nbsp;</p></td>
    </tr>
    <tr>
      <td width="24%" align="right"><b>���� - ʡ�� �����ҹ :</b></td>
<td width="76%">&nbsp;
      <input name="txtuserdesc" type="text" id="txtuserdesc" size="40" value="<?=$rsEditProfile['USER_DESC']?>" /></td>
    </tr>
    <tr>
      <td align="right"><b>���ʼ�ҹ��� :</b></td>
  <td>&nbsp;
      <input type="password" name="txtold" id="txtold" /></td>
    </tr>
    <tr>
      <td align="right" class=unit><b>���ʼ�ҹ���� :</b></td>
  <td>&nbsp;
      <input type="password" name="txtnew" id="txtnew" /> 
      <span style="color:#339933; font-size:11px">* ���ʼ�ҹ����������ͧ���� +</span></td>
    </tr>
    <tr>
      <td align="right"><b>�׹�ѹ���ʼ�ҹ :</b></td>
  <td>&nbsp;
      <input type="password" name="txtnew1" id="txtnew1" /></td>
    </tr>
    <tr>
      <td height="24" align="right"><b>������ :</b></td>
      <td>&nbsp;
          <input name="txtemail" type="text" id="txtemail" size="40"  value="<?=$rsEditProfile['EMAIL']?>"  />
          <span style="color:#FF0000; font-size:11px"> * �� Email ����������ԧ����� Email �ͧ �ʷ. ��ҹ��</span> </td>
    </tr>
    <tr>
      <td height="24" align="right"><b>�����÷��Դ����� :</b></td>
      <td>&nbsp;
          <input name="txttelephone" type="text" id="txttelephone" size="20"  value="<?=$rsEditProfile['TELEPHONE']?>"  /></td>
    </tr>
   
   <!--
    <tr>
      <td height="25" align="right"><b>���͡�������Ӷ���ѹ��� :</b></td>
      <td><span class="content" style="color:#006600;font-weight:bold">
        &nbsp;
        <select name="forgot_question" title="���͡�Ӷ��">
          <option value="1" <?=$rsEditProfile['FORGOT_QUESTION']=="1"?"selected":""?>>�ѹ���س������ӧҹ��� �ʷ</option>
          <option value="2" <?=$rsEditProfile['FORGOT_QUESTION']=="2"?"selected":""?>>���˹��á���س��ӧҹ� �ʷ</option>
          <option value="3" <?=$rsEditProfile['FORGOT_QUESTION']=="3"?"selected":""?>>�����ѵ������§���س�ͺ</option>
          <option value="4" <?=$rsEditProfile['FORGOT_QUESTION']=="4"?"selected":""?>>����¹ö+��ҹ�Ţ���</option>
          <option value="5" <?=$rsEditProfile['FORGOT_QUESTION']=="5"?"selected":""?>>������ö+�շ��س��ҡ��</option>
        </select>
        <span style="color:#FF0000">*</span></span></td>
    </tr>
    <tr>
      <td height="24" align="right"><b>�ӵͺ :</b></td>
      <td>&nbsp;
        <input name="forgot_answer" type="text" id="forgot_answer" size="40"  value="<?=base64_decode($rsEditProfile['FORGOT_ANSWER'])?>"  />
      <span style="color:#FF0000">*</span></td>
    </tr>
    
    -->
    <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;
          <input name="button3" type="button" onclick="savepassLogin();" value="����¹�ŧ������"  style="cursor:pointer;" />
        &nbsp;
        <input name="reset2" type="reset" onclick="window.location='index.php'; " value="  ¡��ԡ   "  style="cursor:pointer;"; /></td>
    </tr>
    <tr>
      <td height="70" colspan="2"><span style="color:#FF0000; font-size:11px"><b>&nbsp;&nbsp;<img src="./images/icon-warning.gif" width="16" height="16" align="absmiddle" /> &nbsp;* �����˵� ?<br />
      </b>&nbsp;
&nbsp;- �к��зӡ�������ʼ�ҹ��Т����ż����ҹ���������� E-Mail �������ҹ�к������ҹ�� <br />
&nbsp;- ��سҵ�Ǩ�ͺ��������������������������ԧ ��е�ͧ�� E-Mail �ͧ �ʷ. ��ҹ�����ͧ�ҡ�к� �������ö��������ѧ Mail Box ������</span></td>
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
			pageBack("index.php","���ʼ�ҹ��١�������! \\n����㹡��������ʼ�ҹ���駵��� ��� ".datethai($exdate,"full")." \\n��سҷӡ�� Login ����");
		
}else {  // nrows <> 1
			//echo "�����������ʼ�ҹ���١��ͧ";
			pageBack("modules.php?name=Login&op=chgpass","�����������ʼ�ҹ���١��ͧ");
			
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
				
		pageBack("index.php","�����ż����ҹ�к���١�������! \\n�����ż����ҹ�к�����价�������� : ".$rsData['EMAIL']."  \\n����㹡��������ʼ�ҹ���駵��� ��� ".datethai($exdate,"full")." \\n��سҷӡ�� Login ����");


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



switch($op) { // �Դ $op �ҡ GET �����

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
  

