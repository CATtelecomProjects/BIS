<?php
session_start();

include("../../includes/custom_files/functions.php");
include("../../includes/custom_files/dbConnect.php");

$dbOra  -> debug= true;


?>

<form action = "" method = "post" name="forgetpass" id="forgetpass">
<table width="100%"  height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="144" align="left" valign="top"></td>
            <td width="770" align="left" valign="top"></td>
            <td width="37" align="left" valign="top" ></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="middle" background="../../images/grid-hrow.gif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;�͢�����ż����ҹ�к�..</strong></td>
            <td width="37" align="center" valign="middle" background="../../images/grid-hrow.gif"><img src="../../images/icon-close.png"  border="0" onclick="closeMessage();return false" style="cursor:pointer" title="�Դ˹�ҵ�ҧ���" /></td>
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
                    <td><input name="email" type="text" class="formbutton" id="email" title="E-Mail Address"  onblur="checkValidUser()" value="@cattelecom.com" size="35"/>
                      <div id="divValidUser"></div></td>
                  </tr>
                  
                  <tr>
                    <td><span style="color:#009900; font-size:11px"></span></td>
                  </tr>
                  <tr>
                    <td height="43" valign="top">&nbsp;</td>
                    <td colspan="2"><input name="sendForgotPAss" type="button" class="formbutton" id="sendForgotPAss" value="    �觤Ӣ�    " style="cursor:pointer;font-weight:bold" title="�觤Ӣ�" onclick="checkForgotForm();" />
                      <label>
                      <input name="toLogin" type="button" class="formbutton" id="toLogin"onclick="displayMessage('./modules/Login/dialog_Login.php','510','315');return false" value="��Ѻ˹���������к�" style="cursor:pointer;font-weight:bold" title="�������к�"  />
                      </label></td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table>
        <div id="divSendReqForgetPass"></div>
        </td>
    </tr>
    <tr valign="top">
      <td align="left" valign="middle"><span style="color:#FF0000; font-size:11px";> <b> &nbsp;&nbsp;<img src="../../images/icon-warning.gif" width="16" height="16" align="absmiddle" /> &nbsp;�ô��ҹ :</b>&nbsp;<br />
        &nbsp;- �к��зӡ�������ʼ�ҹ��Т����ż����ҹ���������� E-Mail �������ҹ�к������ҹ�� <br />
        &nbsp;- ��سҵ�Ǩ�ͺ��������������������������ԧ ��е�ͧ�� E-Mail �ͧ �ʷ. ��ҹ��</span></td>
    </tr>
  </table>
  <!--
  <table width="100%"  height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="144" align="left" valign="top"></td>
            <td width="770" align="left" valign="top"></td>
            <td width="37" align="left" valign="top" ></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="middle" background="../../images/grid-hrow.gif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;������ʼ�ҹ..</strong></td>
            <td width="37" align="center" valign="middle" background="../../images/grid-hrow.gif"><img src="../../images/icon-close.png"  border="0" onclick="closeMessage();return false" style="cursor:pointer" title="�Դ˹�ҵ�ҧ���" /></td>
          </tr>
          <tr>
            <td width="144" align="center" valign="top"><br />
              <img src="images/keylogin.gif" /></td>
            <td colspan="2"><div id="divForgetPass">
                <table width="100%"  border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="0">
                  <tr>
                    <td width="3%" rowspan="7" valign="top">&nbsp;</td>
                    <td class="content">&nbsp;</td>
                    <td width="9%" rowspan="7" valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="88%" class="content" style="color:#006600; font-weight:bold">���ͼ����ҹ : </td>
                  </tr>
                  <tr>
                    <td><input name="forgot_username" type="text" class="formbutton" id="forgot_username" title="���ͼ����ҹ"  onblur="checkValidUser()"/>
                      <div id="divValidUser"></div></td>
                  </tr>
                  <tr>
                    <td class="content" style="color:#006600;font-weight:bold"><span class="content" style="color:#006600; font-weight:bold">���͡�Ӷ��<strong> </strong> :</span></td>
                  </tr>
                  <tr>
                    <td class="content" style="color:#006600;font-weight:bold"><select name="forgot_question" id="forgot_question" title="���͡�Ӷ��">
                        <option value="1">�ѹ���س������ӧҹ��� �ʷ</option>
                        <option value="2">���˹��á���س��ӧҹ� �ʷ</option>
                        <option value="3">�����ѵ������§���س�ͺ</option>
                        <option value="4">����¹ö+��ҹ�Ţ���</option>
                        <option value="5">������ö+�շ��س��ҡ��</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td class="content" style="color:#006600;font-weight:bold">�ӵͺ : </td>
                  </tr>
                  <tr>
                    <td><input name="forgot_answer" type="text" class="formbutton" id="forgot_answer" title="�ӵͺ"  size="40"  onkeypress = "check_enter_forgot()" /></td>
                  </tr>
                  <tr>
                    <td height="43" valign="top">&nbsp;</td>
                    <td colspan="2"><input name="sendForgotPAss" type="button" class="formbutton" id="sendForgotPAss" value="�����ʼ�ҹ����" style="cursor:pointer;font-weight:bold" title="�����ʼ�ҹ����" onclick="checkForgotForm();" />
                      <label>
                      <input name="toLogin" type="button" class="formbutton" id="toLogin"onclick="displayMessage('./modules/Login/dialog_Login.php','450','230');return false" value="��Ѻ˹���������к�" style="cursor:pointer;font-weight:bold" title="�������к�"  />
                      </label></td>
                  </tr>
                </table>
              </div></td>
          </tr>
        </table></td>
    </tr>
    <tr valign="top">
      <td align="left" valign="middle"><span style="color:#FF0000; font-size:11px";> <b> &nbsp;&nbsp;<img src="../../images/icon-warning.gif" width="16" height="16" align="absmiddle" /> &nbsp;�ô��ҹ :</b>&nbsp;<br />
        &nbsp;- �к��зӡ�������ʼ�ҹ��Т����ż����ҹ���������� E-Mail �������ҹ�к������ҹ�� <br />
        &nbsp;- ��سҵ�Ǩ�ͺ��������������������������ԧ ��е�ͧ�� E-Mail �ͧ �ʷ. ��ҹ��</span></td>
    </tr>
  </table>
  -->
  
</form>
<script language="javascript" type="text/javascript">
	document.getElementById('forgot_username').focus();
</script>
<script language = "javascript" type="text/javascript" >
		function checkForgotForm(){
			if (document.getElementById('email').value == ""){
				alert ('��سһ�͹ E-mail ');
				document.getElementById('email').focus();
				return false;
			//}else if(document.getElementById('forgot_answer').value == "")	{
			//	alert ('��سһ�͹�ӵͺ!!');
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
