<?php
session_start();
	?>
<!-- Tipsy Tooltips -->
<!--<script type="text/javascript" src="./includes/custom_files/custom_jquery.js"></script>-->
<form action = "modules.php?name=Login&op=checkLogin" method = "post" name="login" id="login">
  <table width="100%"  height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="144" align="left" valign="top"></td>
            <td width="770" align="left" valign="top"></td>
            <td width="37" align="left" valign="top" ></td>
          </tr>
          <tr>
            <td height="22" colspan="2" align="left" valign="middle" background="../../images/grid-hrow.gif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;�������к����ʹ�ȷҧ��áԨ..</strong></td>
            <td width="37" align="center" valign="middle" background="../../images/grid-hrow.gif"><img src="../../images/icon-close.png"  border="0" onclick="closeMessage();return false" style="cursor:pointer" title="�Դ˹�ҵ�ҧ���" /></td>
          </tr>
          <tr>
            <td width="144" align="center" valign="top"><br />
              <img src="../../images/login.png" /></td>
            <td colspan="2"><div id="divCheckLogin">
               <table width="100%"  border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="0">
                  <tr>
                    <td width="2%" rowspan="5" valign="top">&nbsp;</td>
                    <td class="content">&nbsp;</td>
                    <td width="43%" rowspan="5" valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="55%" class="content" style="color:#006600; font-weight:bold">Username : </td>
                  </tr>
                  <tr>
                    <td><input name="username" type="text"  id="username" title="���ͼ����ҹ" onkeypress = "next_enter();" class="tooltips" /></td>
                  </tr>
                  <tr>
                    <td class="content" style="color:#006600;font-weight:bold">Password : </td>
                  </tr>
                  <tr>
                    <td><input name="password" type="password"  id="password" class="tooltips"  title="���ʼ�ҹ" onkeypress = "check_enter()" /></td>
                  </tr>
                  <tr>
                    <td height="33" valign="top">&nbsp;</td>
                    <td colspan="2"><input name="Login" type="button" class="formbutton" id="Login" onclick = "check(this.form)" value="     Login     " style="cursor:pointer;font-weight:bold" title="�������к�"  />
                      <!--<input name="Login" type="button" class="formbutton" onclick = "changepwd()" value="Change Password" style="cursor:pointer;font-weight:bold;" title="����¹���ʼ�ҹ" />-->
                      <input name="changepwd" type="button" class="formbutton" onClick="javascript:window.open('http://eim.cattelecom.com' , 'eim_win','' )"; value="Change Password" style="cursor:pointer;font-weight:bold;" title="����¹���ʼ�ҹ" />
                      <label><a href="#" onclick="displayMessage('./modules/Login/dialog_ForgetPasswd.php','490','285');return false"><img src="../../images/icon-information.gif" border="0" align="absmiddle" />������ʼ�ҹ</a></label></td>
                  </tr>
                </table>
                

<!--                
                <table width="100%"  border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="0">
                  <tr>
                    <td width="2%" rowspan="6" valign="top">&nbsp;</td>
                    <td class="content">&nbsp;</td>
                    <td width="5%" rowspan="6" valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="93%" style="color:#F00; font-weight:bold"><b><u>�駡�������ҹ�к� BIS</u></b></td>
                  </tr>
                  <tr>
                    <td style="color:#F00;">  &nbsp;&nbsp;&nbsp;&nbsp;���ͧ�ҡ�ҧ�к���ͧ�Դ��Ѻ��ا Server ������������ö�����ҹ�к��� �֧�����¼����ҹ�� � �������� </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span style="color:#F00;">�֧���¹�������ô��Һ</span></td>
                  </tr>
                  <tr>
                    <td> &nbsp;&nbsp;<span style="color:#F00;">�������к��ҹ BIS</span></td>
                  </tr>
                  <tr>
                    <td height="33" valign="top">&nbsp;</td>
                    <td colspan="2"><input name="Login" type="button" class="formbutton" id="Login" onclick = "window.location='index.php';" value="    ��Ѻ˹����ѡ   " style="cursor:pointer;font-weight:bold" title="��Ѻ˹����ѡ"  /></td>
                  </tr>
                </table>
 -->            
                
                
                
              </div></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td align="center" valign="bottom"><span style="color:#ff0000; font-size:11px";> </span>
        <table width="100%" border="0" cellpadding="1" cellspacing="1">
          <tr>
            <td><span style="color:#ff0000; font-size:11px"><b>* <u>�����˵� : </u></b></span></td>
          </tr>
          <!--
        <tr>
          <td><span style="color:#ff0000; font-size:11px">&nbsp;&nbsp;&nbsp;&nbsp;1. ��ԡ��� <a href="#" onclick="displayMessage('./modules/Login/dialog_ForgetPasswd.php','450','290');return false">������ʼ�ҹ</a> �к����觷ӡ�������ʼ�ҹ������ѧ E-Mail �ͧ��ҹ
            <label></label>
          </span></td>
        </tr>
        <tr>
          <td><span style="color:#ff0000; font-size:11px"> &nbsp;&nbsp;&nbsp;&nbsp;2.  �Դ����µç��� <u>��ǹ ø. 7332-4</u></span></td>
        </tr>-->
          <tr>
            <td><span style="color:#ff0000; font-size:11px">&nbsp;&nbsp;&nbsp;&nbsp;1. �ó���� Username ���� Password ��ԡ��� <a href="#" onclick="displayMessage('./modules/Login/dialog_ForgetPasswd.php','450','290');return false">������ʼ�ҹ</a> �к����觢�������ѧ E-Mail �ͧ��ҹ
              <label></label>
              </span></td>
          </tr>
          <tr>
            <td align="left">&nbsp;&nbsp;&nbsp;<span style="color:#ff0000; font-size:11px">2.
              �ó��ͺ�����������������Դ���<b> IT Call Center 7557</b></span></td>
          </tr>
          <tr>
            <td align="center"><span style="color:#003399; font-size:11px">* ����Ѻ��������Է�����к����ʹ�ȷҧ��áԨ��ҹ�鹷������ö�� Username  �����ҧ�ԧ�Ҩҡ User �ͧ E-mail  �ʷ. ������ҧ�� Username � E-mail �ͧ �ʷ. ���   abc.d@cattelecom.com   �ѧ��� Username ��� Password ��������ҹ��� abc.d ����͹�ѹ ����к��кѧ�Ѻ����ա������¹ Password ����ء 3 ��͹ 
              �����ҹ��س�����¹ Password ���µ��ͧ ����������ҷ���˹� </span></td>
          </tr>
        </table>
        <!-- <b><font face="Tahoma" size ="2" color = "#0000ff"> * ¡��鹼�����Է�����к��ҹ Statregion �ѧ���� Username ��� Password ���</b>--></td>
    </tr>
  </table>
</form>
<script language="javascript" type="text/javascript">
	document.getElementById('username').focus();
</script>
<script language = "javascript">
		function check(frm)
		{
			if (document.getElementById('username').value == "")
			{
				alert ('��سһ�͹ Username!');
				document.getElementById('username').focus();
				return false;
			}else if(document.getElementById('password').value == "")
			{
				alert ('��سһ�͹ Password!');
				document.getElementById('password').focus();
				return false;				
			}else
			{
				//frm.submit();	
				var username = document.getElementById('username').value;
				var password = document.getElementById('password').value;
				
				checkLogin("username="+username+"&password="+password,"divCheckLogin");
				
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
