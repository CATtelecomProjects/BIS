<?php
session_start();

include("../../includes/custom_files/functions.php");
include("../../includes/custom_files/dbConnect.php");

$dbOra  -> debug= false;


?>

<form action = "" method = "post" name="forgetpass" id="forgetpass">
  <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="144" align="left" valign="top"></td>
            <td width="770" align="left" valign="top"></td>
            <td width="37" align="left" valign="top" ></td>
          </tr>
          <tr>
            <td width="144" align="center" valign="top"><br />
              <img src="images/login.png" /></td>
            <td colspan="2"><div id="divForgetPass">
                <table width="100%"  border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="0">
                  <tr>
                    <td width="3%" rowspan="4" valign="top">&nbsp;</td>
                    <td class="content">&nbsp;</td>
                    <td width="9%" rowspan="4" valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="88%" class="content" style="color:#006600; font-weight:bold">E-Mail Address : </td>
                  </tr>
                  <tr>
                    <td><input name="email" type="text" class="formbutton" id="email" title="E-Mail Address"  value="@cattelecom.com" size="35"/>
                      <div id="divValidUser"></div></td>
                  </tr>
                  <tr>
                    <td><span style="color:#009900; font-size:11px"></span></td>
                  </tr>
                  <tr>
                    <td height="43" valign="top">&nbsp;</td>
                    <td colspan="2"><span id="sendForgotPass">ส่งคำขอ</span> <span id="toLogin">กลับหน้าเข้าสู่ระบบ</span></td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table>
        <div id="divSendReqForgetPass"></div></td>
    </tr>
    <tr valign="top">
      <td align="left" valign="middle"><span style="color:#FF0000; font-size:11px";> <b> &nbsp;&nbsp;<img src="../../images/icon-warning.gif" width="16" height="16" align="absmiddle" /> &nbsp;โปรดอ่าน :</b>&nbsp;<br />
        &nbsp;- ระบบจะทำการส่งรหัสผ่านและข้อมูลผู้ใช้งานตามที่อยู่ E-Mail ที่ผู้ใช้งานระบุไว้เท่านั้น <br />
        &nbsp;- กรุณาตรวจสอบให้แน่ใจว่าเป็นอีเมล์ที่มีอยู่จริง และต้องเป็น E-Mail ของ กสท. เท่านั้น</span></td>
    </tr>
  </table>
</form>
<script language="javascript" type="text/javascript">
	$(function(){
			$("#email").focus();		

			$("#toLogin").button({
			  icons: {
				primary: "ui-icon-arrowreturnthick-1-w"
			  }
			}).click(function(){
				get("./modules/Login/dialog_Login.php" ,"diag_login_detail");
			});
			
			
			$("#sendForgotPass").button({
			  icons: {
				primary: "ui-icon-lightbulb"
			  }
			}).click(function(){
						
				var email = $("#email").val();
				if(email == "" || email == "@cattelecom.com"){
						alert ('กรุณาป้อน E-mail ');
						$("#email").focus();
				}else{
						$.get("./modules/Login/forgetPass.php?action=send_forgot_pass&email="+email,function(data){
						$("#divForgetPass").html(data);})	
						
						
						// Save Log
						get("./modules/Login/event_log.php?sysname=Request Username/Password&email="+email+"&denied=1","divSendReqForgetPass");
				}
			});
			
			$("#email").keyup(function(){
				validate_email();
			});
			
			
			function validate_email(){
			
				var email = $("#email").val();
				if(email == "" || email == "@cattelecom.com"){
						alert ('กรุณาป้อน E-mail ');
						$("#email").focus();
				}else{
					//$.get("./modules/Login/forgetPass.php?action=chkUser&email="+email,"divValidUser");	
					$.get("./modules/Login/forgetPass.php?action=chkUser&email="+email,function(data){
					$("#divValidUser").html(data);})						
					
					
				}	
			}
			
		
	});
</script> 
<script language = "javascript" type="text/javascript" >
		function checkForgotForm(){
			if (document.getElementById('email').value == ""){
				alert ('กรุณาป้อน E-mail ');
				document.getElementById('email').focus();
				return false;
			//}else if(document.getElementById('forgot_answer').value == "")	{
			//	alert ('กรุณาป้อนคำตอบ!!');
			//	document.getElementById('forgot_answer').focus();
			}else{
				//frm.submit();	
				//sendForgotPass("action=send_forgot_pass&username="+document.getElementById('forgot_username').value+"&forgot_answer="+document.getElementById('forgot_answer').value+"&forgot_question="+document.getElementById('forgot_question').value,"divForgetPass");				
				sendForgotPass("action=send_forgot_pass&email="+document.getElementById('email').value,"divForgetPass");	
				SaveEvent("sysname=Request Username/Password&email="+document.getElementById('email').value+"&denied=1","divSendReqForgetPass");			
			}
		}
		
		
		function check_enter_forgot(){
				if (window.event.keyCode == 13){
					checkForgotForm();
				}
			}
	
    function checkValidUser(){
		if(document.getElementById('email').value != ""){
		checkUser("action=chkUser&email="+document.getElementById('email').value,"divValidUser");
		}
	}
	
</script> 
