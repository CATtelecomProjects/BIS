<?php
session_start();


	?>

<form action = "modules.php?name=Login2&op=checkLogin" method = "post" name="login" id="login">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right"><img src="../../images/icon-close.gif" width="13" height="12" border="0" onclick="closeMessage();return false" style="cursor:pointer" title="�Դ˹�ҵ�ҧ���"><br />
<script language = "javascript">
		function check(frm)
		{
			if (document.getElementById('username').value == "")
			{
				alert ('��سһ�͹ Username');
				document.getElementById('username').focus();
			}else if(document.getElementById('password').value == "")
			{
				alert ('��سһ�͹ Password');
				document.getElementById('password').focus();
			}else
			{
				//frm.submit();	
				checkLogin("username="+document.getElementById('username').value+"&password="+document.getElementById('password').value,"divCheckLogin");
				
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
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="38" height="35" align="left" valign="top">&nbsp;</td>
      <td colspan="2" align="left" valign="top" class="button_bg"><strong>Login to BIS..</strong></td>
      <td width="232" align="right" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" align="left"></td>
      <td valign="top" align="left"></td>
      <td valign="top" align="left" colspan="2"></td>
      <td valign="top" align="left" width="44"></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td width="45" align="left" valign="top"><img src="images/keylogin.gif" /></td>
      <td colspan="2" align="center"><div id="divCheckLogin">
        <table width="100%"  border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="0">
          <tr>
            <td width="5%" rowspan="4" valign="top">&nbsp;</td>
            <td width="52%" class="content">Username : </td>
            <td width="43%" rowspan="4" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td><input name="username" type="text" class="formbutton" id="username" title="���ͼ����ҹ" onkeypress = "next_enter();" /></td>
          </tr>
          <tr>
            <td class="content">Password : </td>
          </tr>
          <tr>
            <td><input name="password" type="password" class="formbutton" id="password" title="���ʼ�ҹ" onkeypress = "check_enter()" /></td>
          </tr>
          <tr>
            <td height="33" valign="top">&nbsp;</td>
            <td colspan="2"><input name="Login" type="button" class="formbutton" id="Login" onclick = "check(this.form)" value="      Login      " style="cursor:pointer;font-weight:bold" title="�������к�"  />
                <input name="Login" type="button" class="formbutton" onclick = "changepwd()" value="Change Password" style="cursor:pointer;font-weight:bold" title="����¹���ʼ�ҹ" />
                <label></label></td>
          </tr>
        </table>
      </div></td>
      <td align="left" valign="top">&nbsp;</td>
    </tr>
    
</table>
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
